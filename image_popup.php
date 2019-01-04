
<div id="myModal" class="modal" onclick="image_hide();">

  <span class="close" onclick="image_hide();">&times;</span>

  <img class="modal-content" id="img01">

  <div id="caption"></div>

</div>


<style>

#myModal
{
  cursor: pointer;
}


#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.owl-carousel.owl-loading {
    display: block;
}
#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}


/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
    animation-name: zoom;
    animation-duration: 0.6s;
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: black;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    z-index: 3;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}

</style>

<div class="fff">
	<div class="thumbnail" onclick="show('<?php echo $gckey; ?>');">
		<a ><img src="<?php echo base_url().$gcvalue['eventimage'];?>" id='<?php echo $gckey; ?>' alt=""></a>
	</div>
	
</div>



<script type="text/javascript">
	
function show(image)
{
  var modal     = document.getElementById('myModal');

  modal.style.display = "block";

  var src = $('#'+image).attr('src');
  
  $('#img01').attr('src',src);

}

function image_hide()
{
  var modal = document.getElementById('myModal');

  modal.style.display = "none";
}

</script>