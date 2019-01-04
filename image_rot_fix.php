<?php

          $image = $product['image'];

          list($width, $height) = getimagesize($image);

          $exif = exif_read_data($image,"EXIF");

          //echo "<pre>";print_r($exif);exit;

          if($exif['Orientation']==6)
          {
            $product['image_res_flag'] = 90 ;
          }


          if (isset($exif['Orientation']))
          {
            switch ($exif['Orientation'])
            {
              case 3:
                $product['image_res_flag'] = 180 ;
                continue;
              case 6:
                $product['image_res_flag'] = 90 ;
                continue;

              case 8:
                $product['image_res_flag'] = -90 ;
                continue;
            }
          }

          $product['image_res_flag'] = ($width>$height) ? 1 : 0 ; 

?>