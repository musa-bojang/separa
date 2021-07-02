// Call the dataTables jQuery plugin
$(document).ready(function() {
 const table = $('#dataTable').DataTable({
      "ajax": {
          "url" : "connection.php",
          "dataSrc": ""
  },
    "columns" :  [
      {
        "data1" : "id",
      },
      {   
        "data": "applicant_id",
        "render": function(data, type, row, meta){
           if(type === 'display'){
               data = '<a href="update.php?departmentid='+data+'&&systemid='+row[0]+'">' + data +'</a>';
           }
           return data;
        }
     },
        {"data" :  "department"},
        {"data" :  "career"},
        {"data" :  "sektor"},
        {"data" : "sub_sektor"},
        {"data" :  "lokasi"},
        {"data" : "daerah"},
        {"data" :  "bangsa"},
        {"data" :  "jantina"},
        {"data" :  "umur"},
        {"data" :  "skill"},
        {"data" :  "status"},
        {"data" :  "remarks"}
       
        
    ],
   
    });
    const column = table.column( 0 ); // gets 2nd column (0-indexed)
 
// Toggle the visibility
column.visible( ! column.visible() ); 
    // $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');
});