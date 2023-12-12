<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '',
  '_disableView' => '1',
  '_filenameFields' => '',
  '_tableName' => 'accounts',
  'listPageFields' => 'fullname, username, email, isAdmin',
  'listPageOrder' => 'fullname, username',
  'listPageSearchFields' => 'fullname, username, email',
  'menuHidden' => '0',
  'menuName' => 'User Accounts',
  'menuOrder' => '0000000118',
  'menuPrefixIcon' => 'fa-user',
  'menuType' => 'multi',
  'tableHidden' => '0',
  'num' => array(
    'order' => '1',
    'isSystemField' => '1',
    'type' => '',
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
  'fullname' => array(
    'order' => '6',
    'label' => 'Full Name',
    'type' => 'textfield',
    'isSystemField' => '0',
    'defaultValue' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'myAccountField' => '1',
  ),
  'email' => array(
    'order' => '7',
    'label' => 'Email',
    'type' => 'textfield',
    'defaultValue' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '1',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'isSystemField' => '1',
    'myAccountField' => '1',
  ),
  'username' => array(
    'order' => '8',
    'label' => 'Username',
    'type' => 'textfield',
    'defaultValue' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '1',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'isSystemField' => '1',
    'myAccountField' => '1',
  ),
  '__separator001__' => array(
    'order' => '9',
    'type' => 'separator',
    'isSystemField' => '0',
    'separatorType' => 'blank line',
    'myAccountField' => '1',
  ),
  'password' => array(
    'order' => '10',
    'label' => 'Password',
    'type' => 'textfield',
    'defaultValue' => '',
    'isPasswordField' => '1',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'isSystemField' => '1',
    'myAccountField' => '1',
  ),
  '__separator002__' => array(
    'order' => '11',
    'type' => 'separator',
    'isSystemField' => '0',
    'separatorType' => 'blank line',
    'myAccountField' => '1',
  ),
  'lastLoginDate' => array(
    'order' => '12',
    'label' => 'Last Login',
    'type' => 'date',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'defaultDate' => 'none',
    'defaultDateString' => '2011-01-01 00:00:00',
    'showTime' => '1',
    'showSeconds' => '1',
    'use24HourFormat' => '0',
    'yearRangeStart' => '2010',
    'yearRangeEnd' => '2020',
  ),
  'expiresDate' => array(
    'order' => '13',
    'label' => 'Account Expires',
    'type' => 'date',
    'isUnique' => '0',
    'showTime' => '0',
    'showSeconds' => '0',
    'use24HourFormat' => '0',
    'yearRangeStart' => '',
    'yearRangeEnd' => '',
    'isSystemField' => '1',
  ),
  'neverExpires' => array(
    'order' => '14',
    'label' => 'Never Expires',
    'type' => 'checkbox',
    'checkedByDefault' => '1',
    'description' => 'Ignore Account Expiry (account never expires)',
    'isSystemField' => '1',
  ),
  '__separator004__' => array(
    'order' => '15',
    'type' => 'separator',
    'isSystemField' => '0',
    'separatorType' => 'blank line',
  ),
  'isAdmin' => array(
    'order' => '16',
    'label' => 'Admin Access',
    'type' => 'checkbox',
    'checkedByDefault' => '0',
    'description' => 'Allow access to Admin menus (including this section)',
    'adminOnly' => '1',
    'isSystemField' => '1',
  ),
  'disabled' => array(
    'order' => '17',
    'label' => 'Disable Access',
    'type' => 'checkbox',
    'checkedByDefault' => '0',
    'description' => 'Disable account (user won\'t be able to login)',
    'isSystemField' => '1',
  ),
  '__separator005__' => array(
    'order' => '18',
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'blank line',
    'separatorHeader' => '',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'accessList' => array(
    'order' => '19',
    'label' => 'Section Access',
    'type' => 'accessList',
    'isSystemField' => '1',
  ),
  '__separator006__' => array(
    'order' => '20',
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'blank line',
    'separatorHeader' => '',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
);
?>