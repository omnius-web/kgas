<?php
namespace om_lib\Mail;
/**
 * Mail - Kgas Mail Send Class
 * @author OMNIUS
 * @author Pigweb
 * @copyright 2020 OMNIUS
 * @copyright 2020 Pigweb
 */
class Mail
{

  function __construct($om_mail_conent, $bo_table)
  {
    switch ($bo_table) {
      case 'om9':
        $subject_sub = "가정용";
        break;
      case 'om10':
        $subject_sub = "영업용";
        break;
      case 'om11':
        $subject_sub = "업무용";
        break;
      case 'om12':
        $subject_sub = "산업용";
        break;
      case 'om13':
        $subject_sub = "기타공사";
        break;
      default:
        // code...
        break;
    }
  }
}

?>
