
<div class="footer" style="width: 100%; height: 220px; background:black; clear: both;">
 <nav>
   <ul>
    <div style="float: left; color:white; width: 350px; list-style: none; align-content: center;">
      <br>
      <h3>ABOUT THIS PAGE</h3>
      <br>
      <li><a href="#" style="text-decoration:none; color: white;">Find a store</a</li>
      <li><a href="#" style="text-decoration:none; color: white;">Sign in your email</a></li>
      <li><a href="#" style="text-decoration:none; color: white;">Become a member</a></li>
      <li><a href="#" style="text-decoration:none; color: white;">contact</a></li><br>
      <br>
    </ul>
    <div style="float:left; color : white ; width:20%; height: 100px ;	 ">
     <p>
      <br>
      <h3>ABOUT THIS COMPANY</h3>
      <br>
      perusahaan distro ini menjual fashion untuk kalangan semua umur dengan banyak kategori
      dan harga dijamin murah :v<br>
      uji coba aja <br>

    </p>
  </div>
  <div style="float:left; color : white ; width:15%; height: 100px ;list-style:none ;">
   <p>
    <br>
    <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNEWS</h3>
    <br>
    <ul style="list-style: none">
      <li><a href="#" style="text-decoration:none ;color: white; font-style:Eras Bold ITC">About Distro</a></li>
      <li><a href="#" style="text-decoration:none ;color: white;">Carrier</a></li>
      <li><a href="#" style="text-decoration:none ;color: white;">Need A job ?</a></li>
      <li><a href="#" style="text-decoration:none ;color: white;">DistroResto+</a></li>
    </ul>

  </p>
</div>

<center><div style="float:right; color : white ; width:30%; height: 100px ;list-style:none ;">
 <p>
  <br>
  <center><h3>&nbsp&nbsp&nbspShare with :</h3></center>
  <ul style="list-style: none; ">
    <li> <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
      <img src="https://simplesharebuttons.com/images/somacro/facebook.png" height="30" alt="Facebook" />
    </a>
    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
      <img src="https://simplesharebuttons.com/images/somacro/google.png" height="30" alt="Google" />
    </a>
    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
      <img src="https://simplesharebuttons.com/images/somacro/twitter.png" height="30" alt="Twitter" />
    </a>
    <a href="http://www.tumblr.com/share/link?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
      <img src="https://simplesharebuttons.com/images/somacro/tumblr.png" height="30"	alt="Tumblr" />
    </a>
  </li>
</ul>

</p>
</div>
</center>
</nav>
<center><div style=" align-items: center;float:bottom; color: grey; font-size: 12px;"><hr width="94%"; ></hr>
 <center><p >copyright by distro resto :v</p></center>
 <div style="float: right; color:gray; font-size: 12px"><center><p><a href="#" style="text-decoration:none; color:grey"> privacy policy &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></p></center></div>
 <div style="float: right; color:gray; font-size: 12px"><center><p><a href="#" style="text-decoration:none; color: grey;">term of use  &nbsp</a></p></center></div>
 <div style="float: right ;color:gray; font-size: 12px;"><center><p><a href="#" style="text-decoration:none; color: grey;">Guides  &nbsp</a></p></center></div>
 <div style="float: left ;color:gray; font-size:12px"><center><p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2016 DistroResto, Inc. All Rights Reserved
 </p></center></div>
</div>
</center>
</div>
</div>

</div>

</body>

<script type="text/javascript">

  $(document).ready(function () {

    $(".home").click(function() {

      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'web/home' ?>",  
        cache :false,  
      //data :({key:$(this).attr('key')}), //mengambil dari variable
      //data :$(this).serialize(), // mengambil dari inputan form -> submit
      success : function(data) {  
        $(".box_ajax").html(data);                    
      },  
      error : function() {  
        alert("Data gagal dimasukkan.");  
      }  
    });

      return false;   


    });


    $(".baju").click(function() {

      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'web/link' ?>",  
        cache :false,  
      data :({key:'baju'}), //mengambil dari variable
      //data :$(this).serialize(), // mengambil dari inputan form -> submit
      success : function(data) {  
        $(".box_ajax").html(data);                    
      },  
      error : function() {  
        alert("Data gagal dimasukkan.");  
      }  
    });

      return false;   


    });

     $(".celana").click(function() {

      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'web/link' ?>",  
        cache :false,  
      data :({key:'celana'}), //mengambil dari variable
      //data :$(this).serialize(), // mengambil dari inputan form -> submit
      success : function(data) {  
        $(".box_ajax").html(data);                    
      },  
      error : function() {  
        alert("Data gagal dimasukkan.");  
      }  
    });

      return false;   


    });


 $(".aksesoris").click(function() {

      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'web/link' ?>",  
        cache :false,  
      data :({key:'aksesoris'}), //mengambil dari variable
      //data :$(this).serialize(), // mengambil dari inputan form -> submit
      success : function(data) {  
        $(".box_ajax").html(data);                    
      },  
      error : function() {  
        alert("Data gagal dimasukkan.");  
      }  
    });

      return false;   


    });
 $(".detail").click(function() {
var key = $(this).attr('key');
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'web/detail' ?>",  
        cache :false,  
      data :({key:key}), //mengambil dari variable
      //data :$(this).serialize(), // mengambil dari inputan form -> submit
      success : function(data) {  
        $(".box_ajax").html(data);                    
      },  
      error : function() {  
        alert("Data gagal dimasukkan.");  
      }  
    });

      return false;   


    });
  
 
  });
</script>

</html>