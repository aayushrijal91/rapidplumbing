<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '',
  '_disableAdd' => '0',
  '_disableErase' => '0',
  '_disableView' => '1',
  '_filenameFields' => '',
  '_hideRecordsFromDisabledAccounts' => '0',
  '_listPage' => '',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_tableName' => 'bios',
  'listPageFields' => 'dragSortOrder, name, title',
  'listPageOrder' => 'dragSortOrder DESC',
  'listPageSearchFields' => '_all_',
  'menuName' => 'Bios',
  'menuOrder' => '1211924024',
  'menuType' => 'multi',
  'num' => array(
    'order' => '1',
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
  ),
  'createdDate' => array(
    'order' => '2',
    'type' => 'none',
    'label' => 'Created',
    'isSystemField' => '1',
  ),
  'createdByUserNum' => array(
    'order' => '3',
    'type' => 'none',
    'label' => 'Created By',
    'isSystemField' => '1',
  ),
  'updatedDate' => array(
    'order' => '4',
    'type' => 'none',
    'label' => 'Last Updated',
    'isSystemField' => '1',
  ),
  'updatedByUserNum' => array(
    'order' => '5',
    'type' => 'none',
    'label' => 'Last Updated By',
    'isSystemField' => '1',
  ),
  'dragSortOrder' => array(
    'order' => '6',
    'label' => 'Order',
    'type' => 'none',
  ),
  'name' => array(
    'order' => '7',
    'label' => 'Name',
    'type' => 'textfield',
    'isSystemField' => '0',
    'defaultValue' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '0',
    'charsetRule' => '',
    'charset' => '',
  ),
  'title' => array(
    'order' => '8',
    'label' => 'Title',
    'type' => 'textfield',
    'isSystemField' => '0',
    'defaultValue' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'email' => array(
    'order' => '9',
    'label' => 'Email',
    'type' => 'textfield',
    'defaultValue' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  '__separator001__' => array(
    'order' => '10',
    'label' => '',
    'type' => 'separator',
    'isSystemField' => '0',
    'separatorType' => 'blank line',
    'separatorHeader' => '',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'biography' => array(
    'order' => '11',
    'label' => 'Biography',
    'type' => 'wysiwyg',
    'isSystemField' => '0',
    'defaultContent' => '',
    'allowUploads' => '1',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '200',
    'allowedExtensions' => 'gif,jpg,jpeg,png,svg,webp',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
  ),
  '__separator002__' => array(
    'order' => '12',
    'label' => '',
    'type' => 'separator',
    'isSystemField' => '0',
    'separatorType' => 'blank line',
    'separatorHeader' => '',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'photo' => array(
    'order' => '13',
    'label' => 'Photo',
    'type' => 'upload',
    'isSystemField' => '0',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,jpeg,png,svg,webp',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '1024',
    'checkMaxUploads' => '1',
    'maxUploads' => '1',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '800',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '175',
    'maxThumbnailWidth' => '175',
    'useCustomUploadDir' => '0',
    'infoField1' => 'Title',
    'infoField2' => 'Caption',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
);
?>