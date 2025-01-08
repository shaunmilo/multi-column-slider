<?php
$arrow_color = isset($settings->arrow_color) ? $settings->arrow_color : '#000000'; 
$dot_color = isset($settings->dot_color) ? $settings->dot_color : '#000000'; 
?>

.fl-node-<?php echo $id; ?> {
  background-color: #<?php echo $settings->bg_color; ?>;
}


.fl-multi-column-slider .slick-prev i,
.fl-multi-column-slider .slick-next i {
    color: #<?php echo  $arrow_color; ?>;
    font-size: 20px;
}

.fl-multi-column-slider .slick-prev {
  position: absolute;
  bottom: 50%;
  z-index: 2;
}

.fl-multi-column-slider .slick-next {
  position: absolute;
  top: 50%;
  right: 0;
}

.fl-multi-column-slider .slick-dots {
  text-align: center;
  margin-top: 50px;
}

.fl-multi-column-slider .slick-dots li {
   position: relative;
    display: inline-block;
    width: 20px;
    height: 20px;
    margin: 0;
    margin-right: 10px;
    padding: 0;
    cursor: pointer;
}

.fl-multi-column-slider ul.slick-dots li.slick-active button {
  opacity: 1;
  background: #<?php echo  $dot_color; ?>;
}

.fl-multi-column-slider .slick-dots button {
  font-size: 0;
  line-height: 0;
  display: block;
  width: 10px;
  height: 10px;
  padding: 5px;
  cursor: pointer;
  border: 0;
  outline: none;
  opacity: 0.5;
  background: #<?php echo  $dot_color; ?>;
  border-radius: 1000px;
}

.fl-multi-column-slider .single-line-text {
  font-size: 2.2rem;
  text-align: center;
  margin-top: 20px;
}

.fl-multi-column-slider .slick-slide img {
  margin: 0 auto;
}

.fl-multi-column-slider .slide {
  text-align: center;
}



