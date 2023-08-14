

<div id="footer" class="cf">
        
        <div class="column three">
             <strong>Phone</strong>
             01234567899
         </div><!-- column -->

         <div class="column three">
             <strong>Location</strong>
             123 Kapiolani Bolulevard<br>
             Honolulu, HI
         </div><!-- column -->

         <div class="column three last">
             <strong>Hours</strong>
             <em>Tuesday - Thursday</em><br>
             1:00pm - 9:00pm <br><br>

             <em>Friday - Saturday</em><br>
             4:00pm - 11:00pm <br><br>

             <em>Sunday - Monday</em><br>
             closed <br><br>
         </div><!-- column -->
             <?php 
                require("StoreHours.php"); 
                $hours = array(
                    'mon' => array('00:00-00:00'),
                    'tue' => array('13:00-21:00'),
                    'wed' => array('13:00-21:00'),
                    'thu' => array('13:00-21:00'), // Open late
                    'fri' => array('16:00-23:30'),
                    'sat' => array('16:00-23:30'),
                    'sun' => array('') // Closed all day... you can left the array empty or make it zeroes
                );

                $exceptions = array(
                    '2/24'  => array('11:00-18:00'),
                    '10/18' => array('11:00-16:00', '18:00-20:30')
                );
                $template = array(
                    'open'           => "<h3>Yes, we're open! Today's hours are <br> <br> <br>{%hours%}.</h3>",
                    'closed'         => "<h3>Sorry, we're closed. Today's hours are <br><br> <br> {%hours%}.</h3>",
                    'closed_all_day' => "<h3>Sorry, we're closed today.</h3>",
                    'separator'      => " - ",
                    'join'           => " and ",
                    'format'         => "g:ia", // options listed here: http://php.net/manual/en/function.date.php
                    'hours'          => "{%open%}{%separator%}{%closed%}"
                );


                $store_hours = new StoreHours($hours, $exceptions, $template);
                $store_hours->render();
             ?>
     </div><!-- footer -->
     <smal>&copy;<?php echo date('Y'); ?> <?php echo $companyName;?></smal>
 </div><!-- content -->
</div><!-- wrapper -->

<div class="copyright-info">
 <?php include('../../assets/includes/copyright.php');?> 
</div><!-- copyright-info -->
 
</body>
</html>