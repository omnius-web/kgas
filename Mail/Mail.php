<?php
namespace Mail;
/**
 * Mail - Kgas Mail Send Class
 * @author OMNIUS
 * @author Pigweb
 * @copyright 2020 OMNIUS
 * @copyright 2020 Pigweb
 */
class Mail
{

  function __construct($om_mail_content, $bo_table)
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
    $subject = $om_mail_content[0]."님의 {$subject_sub} 견적문의 입니다.";
    $content =
    "
      1. 신청인 : {$om_mail_content[0]}\n
      2. 핸드폰번호 : {$om_mail_content[1]}\n
      3. 전화번호 : {$om_mail_content[2]}\n
      4. 이메일 : {$om_mail_content[3]}\n
      5. 현장주소 : {$om_mail_content[4]}\n
    ";
    mail('kgas7@naver.com',$subject,$content);
  }


}

?>
