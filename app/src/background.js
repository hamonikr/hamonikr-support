'use strict'

import { app, protocol, ipcMain, BrowserWindow } from 'electron'
import {
  createProtocol,
  installVueDevtools
} from 'vue-cli-plugin-electron-builder/lib'
const isDevelopment = process.env.NODE_ENV !== 'production'

// Keep a global reference of the window object, if you don't, the window will
// be closed automatically when the JavaScript object is garbage collected.
let win

// Standard scheme must be registered before the app is ready
protocol.registerStandardSchemes(['app'], { secure: true })
function createWindow () {
  // Create the browser window.
  // webPreferences : cross domain setting
  win = new BrowserWindow({ 
    width: 1200,
	height: 605,
    resizable: false,
    frame: true,
    webPreferences: {
        webSecurity: false
    }
  })

  if (process.env.WEBPACK_DEV_SERVER_URL) {
    // Load the url of the dev server if in development mode
    win.loadURL(process.env.WEBPACK_DEV_SERVER_URL)
    if (!process.env.IS_TEST) win.webContents.openDevTools()
  } else {
    createProtocol('app')
    // Load the index.html when not in development
    win.loadURL('app://./index.html')
  }

  win.on('closed', () => {
    win = null
  })
}

// Quit when all windows are closed.
app.on('window-all-closed', () => {
  // On macOS it is common for applications and their menu bar
  // to stay active until the user quits explicitly with Cmd + Q
  if (process.platform !== 'darwin') {
    app.quit()
  }
})

app.on('activate', () => {
  // On macOS it's common to re-create a window in the app when the
  // dock icon is clicked and there are no other windows open.
  if (win === null) {
    createWindow()
  }
})

// This method will be called when Electron has finished
// initialization and is ready to create browser windows.
// Some APIs can only be used after this event occurs.

app.on('ready', async () => {
  if (isDevelopment && !process.env.IS_TEST) {
    // Install Vue Devtools
    await installVueDevtools()
  }
  createWindow()
})

// Exit cleanly on request from parent process in development mode.
if (isDevelopment) {
  if (process.platform === 'win32') {
    process.on('message', data => {
      if (data === 'graceful-exit') {
        app.quit()
      }
    })
  } else {
    process.on('SIGTERM', () => {
      app.quit()
    })
  }
}

//const lic_dir_path = "F:/support_app/";
const lic_dir_path = "/usr/share/applications/.support/";
const fs = require('fs');


//  open file [start]
ipcMain.on('openFile', (event, path) => { 
	var filepath = lic_dir_path + ".hkrmesysinfo";
    var default_lice = "serialnumber:XXXXXXXXXXXXXXXXXXXXXXXXX";

	fs.readFile(filepath, 'utf-8', (err, data) => { 
		if(err){ 
			console.log("An error ocurred reading the file :" + err.message) 

            try{
                fs.statSync(lic_dir_path);
            }catch(e){
                // not find dir
                event.sender.send('undefined-dir', '라이선스를 찾을 수 없습니다. 확인 후 다시 시도해 주시기 바랍니다.');
                return;
            }

            // create file
            fs.writeFile(filepath, default_lice, (err) => {
		        if(err) console.log("An error ocurred creating the default file "+ err.message)
                fs.chmodSync(filepath, '777');
		        console.log("create default file");
	        });

            console.log(default_lice.split('serialnumber:')[1]);
		    event.sender.send('openFile-reply', default_lice.split('serialnumber:')[1])
		}else{
            // find file
		    console.log(data.split('serialnumber:')[1]);
		    event.sender.send('openFile-reply', data.split('serialnumber:')[1])
        }
	});
});

// write file
ipcMain.on('fileData', (event, license) => { 
	var fileDir = lic_dir_path + ".hkrmesysinfo";
	var content = "serialnumber:" + license;

	fs.writeFile(fileDir, content, (err) => {
		if(err) console.log("An error ocurred creating the file "+ err.message)

		console.log("The file has been succesfully saved");
	});
});

// exit
ipcMain.on('support-closed', () => {
    app.quit()
})


