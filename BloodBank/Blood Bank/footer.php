<div class="ftr-bg">
  <div class="wrap">
    <div class="footer">
	   <div>
		<center>
		 <p> <b>Copyright @ Institute of Engineering & Management. All Rights Reserved </b>|| Contact Us: +91 90000 00000 </p>
		</center>
	   </div>
    </div>
</div>
</div>

<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function()
      {
        $('select').change(getList);
        getList();
        function getList()
        {
          var url, target;
          var id = $(this).attr('id');
          if(id!=undefined)
          var selectedValue = $(this).val();
          switch (id)
          {
            case 'stateList':
            if(selectedValue == '') return;
            url = 'results.php?find=district&id='+ selectedValue;
            target = 'districtList';
            break;
            case 'districtList':
            if($(this).val() == '') return;
            url = 'results.php?find=city&id='+ selectedValue;
            target = 'townList';
            break;
            case 'townList':
            break;
            default:
            url = 'results.php?find=state';
            target = 'stateList';
          }
          $.get(
            url,
            { },
            function(data)
            {
              $('#'+target).html(data);
            }
            )
        }
      });
    </script>

</body>
</html>