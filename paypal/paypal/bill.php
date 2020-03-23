<html>
    <head>
        <title>bill</title>
        <script type="text/javascript" src="css/jquery.js"></script>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
          
         <script type="text/javascript">
               $(document).ready(function(){
                    $("#button").click(function(){
 
                          var name=$("#billid").val();
            
                          $.ajax({
                              type:"post",
                              url:"billprocess.php",
                              data:"name="+name,
                              success:function(data){
                                 $("#info").html(data);
                              }
                              error:function(data){
                                $('#info').html(data);
                              }
 
                          });
 
                    });
               });
       </script>
        </script>
    </head>
    <body>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
              </div>
              <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                <label for="disabled">Disabled</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                This is an inline input field:
                <div class="input-field inline">
                  <input id="email" type="email" class="validate">
                  <label for="email" data-error="wrong" data-success="right">Email</label>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div id="info"></div>
    </body>
</html>

