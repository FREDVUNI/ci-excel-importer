<!-- Learn front-end development at rocket speed! http://inarocket.com -->
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
      <title>Absoft | IT Solutions</title>
   </head>
   <body>
      <style>
         .file-drop-area {
         position: relative;
         display: flex;
         align-items: center;
         max-width: 100%;
         padding: 45px;
         border: 1px dashed rgba(255, 255, 255, 0.4);
         border-radius: 3px;
         transition: .2s
         }
         .choose-file-button {
         flex-shrink: 0;
         background-color: rgba(255, 255, 255, 0.04);
         border: 1px solid rgba(255, 255, 255, 0.1);
         border-radius: 3px;
         padding: 8px 5px;
         margin-right: 10px;
         font-size: 12px;
         text-transform: uppercase
         }
         .file-message {
         font-size: small;
         font-weight: 300;
         line-height: 1.4;
         white-space: nowrap;
         overflow: hidden;
         text-overflow: ellipsis
         }
         .file-input {
         position: absolute;
         left: 0;
         top: 0;
         height: 100%;
         widows: 100%;
         cursor: pointer;
         opacity: 0
         }
      </style>
      <div class="container mt-5">
         <div class="row">
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">code</th>
                     <th scope="col">Item</th>
                     <th scope="col">Sku</th>
                     <th scope="col">Price</th>
                     <th scope="col">Profit margin</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach($item as $key=>$row): ?>
                  <tr>
                     <th scope="row"><?php echo $key + 1;?></th>
                     <td><?php echo $row['item_code'];?></td>
                     <td><?php echo $row['item_name'];?></td>
                     <td><?php echo $row['sku'];?></td>
                     <td><?php echo $row['purchase_price'];?></td>
                     <td><?php echo $row['profit_margin'];?></td>
                  </tr>
                  <?php endforeach;?>
               </tbody>
            </table>
            <form method="POST" action="<?php echo base_url('import-excel');?>" enctype="multipart/form-data">
               <div class="file-drop-area"> <span class="choose-file-button">Choose Files</span> <span class="file-message">or drag and drop files here</span> 
                  <input type="file" class="file-input" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required> 
               </div>
               <button type="submit" class="btn btn-light pull-left btn-sm">Import File</button>
            </form>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
      <script>
         $(document).on('change', '.file-input', function() {
         
           var filesCount = $(this)[0].files.length;
         
           var textbox = $(this).prev();
         
           if (filesCount === 1) {
           var fileName = $(this).val().split('\\').pop();
           textbox.text(fileName);
           } else {
           textbox.text(filesCount + ' files selected');
           }
         
         
         
           if (typeof (FileReader) != "undefined") {
           var dvPreview = $("#divImageMediaPreview");
           dvPreview.html("");
           $($(this)[0].files).each(function () {
           var file = $(this);
           var reader = new FileReader();
           reader.onload = function (e) {
           var img = $("<img />");
           img.attr("style", "width: 150px; height:100px; padding: 10px");
           img.attr("src", e.target.result);
           dvPreview.append(img);
           }
           reader.readAsDataURL(file[0]);
           });
           } else {
           alert("This browser does not support HTML5 FileReader.");
           }
         
         
           });
      </script>
   </body>
</html>