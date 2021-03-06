<?php
/*
  osCommerce Online Merchant $osCommerce-SIG$
  Copyright (c) 2010 osCommerce (http://www.oscommerce.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License v2 (1991)
  as published by the Free Software Foundation.
*/

  use osCommerce\OM\Core\OSCOM;
?>

<?php echo osc_image(DIR_WS_IMAGES . $OSCOM_Template->getPageImage(), $OSCOM_Template->getPageTitle(), HEADING_IMAGE_WIDTH, HEADING_IMAGE_HEIGHT, 'id="pageIcon"'); ?>

<h1><?php echo $OSCOM_Template->getPageTitle(); ?></h1>

<div>
  <div style="float: right; width: 49%;">
    <ul>
      <li><?php echo osc_link_object(OSCOM::getLink(null, 'Account', null, 'SSL'), OSCOM::getDef('sitemap_account')); ?>
        <ul>
          <li><?php echo osc_link_object(OSCOM::getLink(null, 'Account', 'Edit', 'SSL'), OSCOM::getDef('sitemap_account_edit')); ?></li>
          <li><?php echo osc_link_object(OSCOM::getLink(null, 'Account', 'AddressBook', 'SSL'), OSCOM::getDef('sitemap_address_book')); ?></li>
          <li><?php echo osc_link_object(OSCOM::getLink(null, 'Account', 'Orders', 'SSL'), OSCOM::getDef('sitemap_account_history')); ?></li>
          <li><?php echo osc_link_object(OSCOM::getLink(null, 'Account', 'Newsletters', 'SSL'), OSCOM::getDef('sitemap_account_notifications')); ?></li>
        </ul>
      </li>
      <li><?php echo osc_link_object(OSCOM::getLink(null, 'Checkout', null, 'SSL'), OSCOM::getDef('sitemap_shopping_cart')); ?></li>
      <li><?php echo osc_link_object(OSCOM::getLink(null, 'Checkout', 'Shipping', 'SSL'), OSCOM::getDef('sitemap_checkout_shipping')); ?></li>
      <li><?php echo osc_link_object(OSCOM::getLink(null, 'Search'), OSCOM::getDef('sitemap_advanced_search')); ?></li>
      <li><?php echo osc_link_object(OSCOM::getLink(null, 'Products', 'New'), OSCOM::getDef('sitemap_products_new')); ?></li>
      <li><?php echo osc_link_object(OSCOM::getLink(null, 'Products', 'Specials'), OSCOM::getDef('sitemap_specials')); ?></li>
      <li><?php echo osc_link_object(OSCOM::getLink(null, 'Products', 'Reviews'), OSCOM::getDef('sitemap_reviews')); ?></li>
      <li><?php echo osc_link_object(OSCOM::getLink(null, 'Info'), OSCOM::getDef('box_information_heading')); ?>
        <ul>
          <li><?php echo osc_link_object(OSCOM::getLink(null, 'Info', 'Shipping'), OSCOM::getDef('box_information_shipping')); ?></li>
          <li><?php echo osc_link_object(OSCOM::getLink(null, 'Info', 'Privacy'), OSCOM::getDef('box_information_privacy')); ?></li>
          <li><?php echo osc_link_object(OSCOM::getLink(null, 'Info', 'Conditions'), OSCOM::getDef('box_information_conditions')); ?></li>
          <li><?php echo osc_link_object(OSCOM::getLink(null, 'Info', 'Contact'), OSCOM::getDef('box_information_contact')); ?></li>
        </ul>
      </li>
    </ul>
  </div>

  <div style="width: 49%;">
    <?php echo $OSCOM_CategoryTree->getTree(); ?>
  </div>
</div>
