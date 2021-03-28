<?php 

function ig_get_day_of_the_week_depending_on_language($day_to_check) {
    if (get_bloginfo("language") === 'en-GB') :


        switch ($day_to_check) {
            case "Mon":
                return 'Monday';
              break;
            case "Tue":
                return 'Tuesday';
              break;
            case "Wed":
                return 'Wednesday';
              break;
            case "Thu":
                return 'Thursday';
              break;
            case "Fri":
                return 'Friday';
              break;
            case "Sat":
                return 'Saturday';
              break;
            case "Sun":
                return 'Sunday';
              break;
            default:
            return null;
          }
        
        elseif (get_bloginfo("language") === 'lv-LV') :
        
            switch ($day_to_check) {
                case "Mon":
                    return 'Pirmdiena';
                  break;
                case "Tue":
                    return 'Otrdiena';
                  break;
                case "Wed":
                    return 'Trešdiena';
                  break;
                case "Thu":
                    return 'Ceturtdiena';
                  break;
                case "Fri":
                    return 'Piektdiena';
                  break;
                case "Sat":
                    return 'Sestdiena';
                  break;
                case "Sun":
                    return 'Svētdiena';
                  break;
                default:
                return null;
              }
        
        endif;
}

$day = date('D', strtotime($time_in_milisecs));
$day_language_dependent = ig_get_day_of_the_week_depending_on_language($day);

?>