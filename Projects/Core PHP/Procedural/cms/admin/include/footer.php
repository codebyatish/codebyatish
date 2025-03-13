    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function () {

			ClassicEditor
				.create( document.querySelector( '#post_content' ) )
				.catch( error => {
				console.error( error );
			});

			
    	});
            
        var div_box = "<div id='load-screen'><div id='loading'></div></div>";
        $('body').prepend(div_box);

        $('#load-screen').delay(700).fadeOut(600,function () {
            $(this).remove();
        });



        function UsersOnline() {

            $.get('functions.php?onlineusers=result',function (data) {
                
                $('.usersonline').text(data);

            });

        }

        setInterval(function(){ 
            UsersOnline();
        }, 1000);
        
    </script>
</body>

</html>