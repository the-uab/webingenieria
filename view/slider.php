
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<div class="container">
  <div class="row">
    <div class="col s12">
        <div class="slider">
            <ul class="slides">
                <li> 
                    <img src="multimedia/img/uab.jpg" class="responsive-img"> 
                </li>
                <li> 
                    <img src="multimedia/img/ambiental.jpg" class="responsive-img"> 
                </li>
                <li> 
                    <img src="multimedia/img/telecom.jpg" class="responsive-img"> 
                </li>
                <li> 
                    <img src="multimedia/img/sistem.jpg" class="responsive-img"> 
                </li>
            </ul>
            
        </div>
    </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
<script>
    $(document).ready(function(){
        $('select').material_select();
        $('datepicker').pickedate();
        $('dropdown.button').dropdown();
        $('button-collapse').sideNav();
        $('.slider').slider();
    });
</script>




