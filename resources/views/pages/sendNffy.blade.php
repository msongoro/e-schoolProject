@include('pages.head')
   <body class="bcolor">

   <div class="container py-5">
       <div class="card shadow-lg">
           <div class="card-head">
               <h1 class="text-center py-5 text-primary">MESSAGE BOARD</h1>
           </div>
            <div class="d-flex justify-content-center">
            <div>
                  <img src="Home/assets/img/calling.gif" alt="" class="w-75 h-125 mx-auto">
              </div>
            <form action="" method="post" class="w-50 h-25 shadow-lg" style="margin-right:35px;">
               @csrf
               <div class="form-group py-4 px-4">
                   <input type="phone" class="form-control" placeholder="Phone Number">
               </div>
               <div class="form-group py-3 px-4">
                   <textarea name="messages" id="mess" cols="20" rows="5" class="form-control" placeholder="Messages"></textarea>
               </div>
                 <button class="btn btn-primary w-50 mx-4 mb-3">Send SMS</button>

           </form>
            
            </div>
       </div>
   </div> 
   </body>
    </html>  