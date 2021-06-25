// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
      "ajax": {
          "url" : "connection.php",
          "dataSrc": ""
  },
    "columns" :  [
        {"data" :  "department"},
        {"data" :  "type"},
        {"data" :  "sektor"},
        {"data" :  "lokasi"},
        {"data" :  "bangsa"},
        {"data" :  "jantina"},
        {"data" :  "umur"},
        {"data" :  "skill"},
        // {"data" : "applicant"}
        {   
          "data": "applicant",
          "render": function(data, type, row, meta){
             if(type === 'display'){
                 data = '<a href="track_application.php?id='+data+'">' + data + '</a>';
             }
             return data;
          }
       }
    ],
   
    });
    // $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');
});