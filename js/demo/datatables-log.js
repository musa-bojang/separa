// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').DataTable({
      "dom": '<"toolbar">frtip',
        "ajax": {
            "url" : "model/log_data.php",
            "dataSrc": ""
    },
      "columns" :  [
          {"data" :  "username"},
          {"data" :  "log_timer"},
          {"data" :  "log_date"},
          {"data" :  "location"}
      ],
      
      });
    //   $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');
  });