<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_description' => '',
  '_detailPage' => '',
  '_disableAdd' => '0',
  '_disableErase' => '0',
  '_disableEraseFromModify' => '0',
  '_disableModify' => '0',
  '_disablePreview' => '0',
  '_disableView' => '1',
  '_filenameFields' => 'title',
  '_hideRecordsFromDisabledAccounts' => '0',
  '_indent' => '0',
  '_listPage' => '',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_perPageDefault' => '25',
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => 'roofing_guttering_services',
  'listPageFields' => 'dragSortOrder, title',
  'listPageOrder' => 'dragSortOrder DESC',
  'listPageSearchFields' => '_all_',
  'menuHidden' => '0',
  'menuName' => 'Roofing Guttering Services',
  'menuOrder' => '0000000076',
  'menuPrefixIcon' => '',
  'menuType' => 'multi',
  'num' => array(
    'order' => 1,
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
  ),
  'createdDate' => array(
    'order' => 2,
    'type' => 'none',
    'label' => 'Created',
    'isSystemField' => '1',
  ),
  'createdByUserNum' => array(
    'order' => 3,
    'type' => 'none',
    'label' => 'Created By',
    'isSystemField' => '1',
  ),
  'updatedDate' => array(
    'order' => 4,
    'type' => 'none',
    'label' => 'Last Updated',
    'isSystemField' => '1',
  ),
  'updatedByUserNum' => array(
    'order' => 5,
    'type' => 'none',
    'label' => 'Last Updated By',
    'isSystemField' => '1',
  ),
  'dragSortOrder' => array(
    'order' => 6,
    'label' => 'Order',
    'type' => 'none',
  ),
  'title' => array(
    'order' => 7,
    'label' => 'Title',
    'type' => 'textfield',
    'defaultValue' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'slug' => array(
    'order' => 8,
    'label' => 'Slug',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'image' => array(
    'order' => 9,
    'label' => 'Image',
    'type' => 'upload',
    'defaultContent' => '',
    'allowUploads' => '1',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '300',
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
    'fieldPrefix' => '',
    'description' => '',
    'cropThumbnails' => '0',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'cropThumbnails2' => '0',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'cropThumbnails3' => '0',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'cropThumbnails4' => '0',
    'infoField1' => 'Title',
    'infoField2' => 'Caption',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
  '__separator001__' => array(
    'order' => 10,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'META',
    'separatorHTML' => '<div class=\'col-sm-2\'>
  Column 1
</div>
<div class=\'col-sm-10\'>
  Column 2
</div>
',
    'isCollapsible' => '',
    'isCollapsed' => '',
  ),
  'meta_title' => array(
    'order' => 11,
    'label' => 'Title',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'meta_keyword' => array(
    'order' => 12,
    'label' => 'Keyword',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'meta_description' => array(
    'order' => 13,
    'label' => 'Description',
    'type' => 'textbox',
    'indexed' => '',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '',
    'autoFormat' => '1',
  ),
  '__separator002__' => array(
    'order' => 14,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'BANNER',
    'separatorHTML' => '<div class=\'col-sm-2\'>
  Column 1
</div>
<div class=\'col-sm-10\'>
  Column 2
</div>
',
    'isCollapsible' => '',
    'isCollapsed' => '',
  ),
  'banner_title' => array(
    'order' => 15,
    'label' => 'Banner Title',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'banner_title_heading_tag' => array(
    'order' => 16,
    'label' => 'Banner Title Heading Tag',
    'type' => 'list',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'table',
    'optionsTablename' => 'html_tags',
    'optionsValueField' => 'tag_value',
    'optionsLabelField' => 'title',
  ),
  'banner_subtitle' => array(
    'order' => 17,
    'label' => 'Banner Subtitle',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'banner_video_image' => array(
    'order' => 18,
    'label' => 'Banner Video/Image',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
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
    'cropThumbnails' => '0',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'cropThumbnails2' => '0',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'cropThumbnails3' => '0',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'cropThumbnails4' => '0',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
    'infoField1' => 'Title',
    'infoField2' => 'Caption',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
  'banner_button_1_text' => array(
    'order' => 19,
    'label' => 'Banner Button 1 Text',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'banner_button_1_link' => array(
    'order' => 20,
    'label' => 'Banner Button 1 Link',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'banner_button_2_text' => array(
    'order' => 21,
    'label' => 'Banner Button 2 Text',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'banner_button_2_link' => array(
    'order' => 22,
    'label' => 'Banner Button 2 Link',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  '__separator003__' => array(
    'order' => 23,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'Introduction',
    'separatorHTML' => '<div class=\'col-sm-2\'>
  Column 1
</div>
<div class=\'col-sm-10\'>
  Column 2
</div>
',
    'isCollapsible' => '',
    'isCollapsed' => '',
  ),
  'introduction_title' => array(
    'order' => 24,
    'label' => 'Title',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'introduction_subtitle' => array(
    'order' => 25,
    'label' => 'Subtitle',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'introduction_image' => array(
    'order' => 26,
    'label' => 'Image',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
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
    'cropThumbnails' => '0',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'cropThumbnails2' => '0',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'cropThumbnails3' => '0',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'cropThumbnails4' => '0',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
    'infoField1' => 'Title',
    'infoField2' => 'Caption',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
  'introduction_description' => array(
    'order' => 27,
    'label' => 'Description',
    'type' => 'wysiwyg',
    'indexed' => '',
    'fieldPrefix' => '',
    'description' => '',
    'defaultContent' => '',
    'allowUploads' => '1',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '',
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
    'cropThumbnails' => '0',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'cropThumbnails2' => '0',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'cropThumbnails3' => '0',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'cropThumbnails4' => '0',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
  ),
);
?>