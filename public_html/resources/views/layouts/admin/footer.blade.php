 <!-- END CONTENT -->

 <div class="page-chatapi hideit">

     <div class="search-bar">
         <input type="text" placeholder="Search" class="form-control">
     </div>

     <div class="chat-wrapper">

     </div>

 </div>


 <div class="chatapi-windows ">


 </div>
 </div>
 <!-- END CONTAINER -->
 <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


 <!-- CORE JS FRAMEWORK - START -->

 <script src="{{ asset('public/admin/assets/js/popper.min.js') }}" type="text/javascript"></script>
 <!-- <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>  -->
 <script src="{{ asset('public/admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('public/admin/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>

 <script src="{{ asset('public/admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"
     type="text/javascript"></script>
 <script src="{{ asset('public/admin/assets/plugins/viewport/viewportchecker.js') }}" type="text/javascript"></script>
 <!-- CORE JS FRAMEWORK - END -->


 <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
 <script src="{{ asset('public/admin/assets/plugins/jquery-ui/smoothness/jquery-ui.min.js') }}" type="text/javascript">
 </script>
 <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
 <script src="assets/plugins/easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
 <script src="assets/plugins/morris-chart/js/raphael-min.js" type="text/javascript"></script>
 <script src="assets/plugins/morris-chart/js/morris.min.js" type="text/javascript"></script>
 <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js" type="text/javascript"></script>
 <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
 <script src="assets/plugins/gauge/gauge.min.js" type="text/javascript"></script>
 <script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
 <script src="assets/js/dashboard.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


 <!-- CORE TEMPLATE JS - START -->
 <script src="{{ asset('public/admin/assets/js/scripts.js') }}" type="text/javascript"></script>
 <!-- END CORE TEMPLATE JS - END -->

 <!-- Sidebar Graph - START -->
 <script src="{{ asset('public/admin/assets/plugins/sparkline-chart/jquery.sparkline.min.js') }}" type="text/javascript">
 </script>
 <script src="{{ asset('public/admin/assets/js/chart-sparkline.js') }}" type="text/javascript"></script>
 <script src="<?php echo asset('public/admin/assets/ck/build/ckeditor.js'); ?>"></script>
 <script src="{{ asset('public/admin/assets/js/custom.min.js') }}" type="text/javascript"></script>
 <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
 <script>
     $(document).ready(function() {
         var table = $('#users_table').DataTable({
             initComplete: function() {
                 this.api().columns().every(function() {
                     var column = this;
                     if (column.header().getAttribute("data-filter") === "true") {
                         var filter = $('<input type="text" placeholder="Filter"/>')
                             .appendTo($(column.header()).empty())
                             .on('keyup change', function() {
                                 column.search($(this).val()).draw();
                             });
                     }
                 });
             }
         });
     });
 </script>
 <script>
     $("#categoryskz").change(function() {
         var currentOptions = $(this).children("option:selected").text();
         var types = '';
         //alert($(this).children("option:selected").text());
         if (currentOptions == 'Guide') {
             types += '<option value="home-buying-guide">Home Buying Guide</option>';
             types += '<option value="home-selling-guide">Home Selling Guide</option>';
             $('#skztype').html(types);
         } else if (currentOptions == 'Center') {
             types += '<option value="lender-resource-center">Lender Resource Center</option>';
             types += '<option value="mortgage-resource-center">Mortgage Resource Center</option>';
             types += '<option value="agent-resource-center">Agent Resource Center</option>';
             $('#skztype').html(types);
         } else if (currentOptions == 'Blogs And News') {
             types += '<option value="housing-market-updates">Housing Market Updates</option>';
             types += '<option value="present-mortgage-rates">Present Mortgage Rates</option>';
             types += '<option value="rent-or-buy-decision">Rent or Buy Decision</option>';
             types += '<option value="blog" selected="selected">Blogs</option>';
             $('#skztype').html(types);
         }
     });
 </script>
 <script>
     ClassicEditor
         .create(document.querySelector('.editor'), {

             toolbar: {
                 items: [
                     'heading',
                     '|',
                     'bold',
                     'italic',
                     'link',
                     'bulletedList',
                     'numberedList',
                     '|',
                     'indent',
                     'outdent',
                     '|',
                     'imageUpload',
                     'blockQuote',
                     'insertTable',
                     'mediaEmbed',
                     'undo',
                     'redo'
                 ]
             },
             language: 'en',
             image: {
                 toolbar: [
                     'imageTextAlternative',
                     'imageStyle:full',
                     'imageStyle:side'
                 ]
             },
             table: {
                 contentToolbar: [
                     'tableColumn',
                     'tableRow',
                     'mergeTableCells'
                 ]
             },
             licenseKey: '',

         })
         .then(editor => {
             window.editor = editor;




         })
         .catch(error => {
             console.error('Oops, something gone wrong!');
             console.error(
                 'Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:'
                 );
             console.warn('Build id: o86ozjmqxjuq-8o65j7c6blw0');
             console.error(error);
         });
 </script>
 <!-- Sidebar Graph - END -->



 <!-- General section box modal start -->
 <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label"
     aria-hidden="true">
     <div class="modal-dialog animated bounceInDown">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Section Settings</h4>
             </div>
             <div class="modal-body">

                 Body goes here...

             </div>
             <div class="modal-footer">
                 <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                 <button class="btn btn-success" type="button">Save changes</button>
             </div>
         </div>
     </div>
 </div>
 <!-- modal end -->
 </body>

 </html>
