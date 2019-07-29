<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','_header.html') ?>
<!-- Content -->
<div class="admin_content">
	<?php $__Context->inc=strtolower($__Context->act) ?>
	<?php $__Context->inc=preg_replace('/dispnproductadmin/','',$__Context->inc) ?>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->inc != 'skininfo'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<?php if($__Context->inc=='config'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','config');
} ?>
	<?php if($__Context->inc=='modinstlist'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','modinstlist');
} ?>
	<?php if($__Context->inc=='insertmodinst'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','insertmodinst');
} ?>
	<?php if($__Context->inc=='categorymanagement'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','categorymanagement');
} ?>
	<?php if($__Context->inc=='insertitem'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','insertitem');
} ?>
	<?php if($__Context->inc=='updateitem'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','updateitem');
} ?>
	<?php if($__Context->inc=='itemlist'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','itemlist');
} ?>
	<?php if($__Context->inc=='additionsetup'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','additionsetup');
} ?>
	<?php if($__Context->inc=='ordermanagement'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','ordermanagement');
} ?>
	<?php if($__Context->inc=='orderdetail'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','orderdetail');
} ?>
	<?php if($__Context->inc=='displaycategories'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','displaycategories');
} ?>
	<?php if($__Context->inc=='itemextrasetup'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','itemextrasetup');
} ?>
	<?php if($__Context->inc=='dashboard'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','dashboard');
} ?>
	<?php if($__Context->inc=='mailsetuplist'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','mailsetuplist');
} ?>
	<?php if($__Context->inc=='mailsetup'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','mailsetup');
} ?>
	<?php if($__Context->inc=='smssetup'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','smssetup');
} ?>
	<?php if($__Context->inc=='statdaily'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','statdaily');
} ?>
	<?php if($__Context->inc=='statmonthly'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','statmonthly');
} ?>
	<?php if($__Context->inc=='taxinvoice'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','taxinvoice');
} ?>
	<?php if($__Context->inc=='skininfo'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','skininfo');
} ?>
	<?php if($__Context->inc=='mileagelist'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','mileagelist');
} ?>
	<?php if($__Context->inc=='mileagehistory'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','mileagehistory');
} ?>
	<?php if($__Context->inc=='bulkitems'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','bulkitems');
} ?>
	<?php if($__Context->inc=='listsetup'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','listsetup');
} ?>
</div><!-- Content -->
