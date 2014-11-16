<?php
/**
 * Created by PhpStorm.
 * User: edev
 * Date: 15-Nov-14
 * Time: 9:22 PM
 */
 ?>
 <?php
 //add meesages if words lang not exist
 	class MyEventHandler {
 		static function handleMissingTranslation($event) {
 				// event class for this event is CMissingTranslationEvent
 				// so we can get some info about the message
 				$text = implode("\n", array(
 					'Language: '.$event->language,
 					'Category:'.$event->category,
 					'Message:'.$event->message
 				));
 				// sending email
 				mail('email@mysite.ru', 'Missing translation', $text);
 		}
 }
 ?>