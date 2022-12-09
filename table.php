<html>
<head>

<title></title>


<link rel="stylesheet" type="text/css" href="css/table.css">


<!-- link for table -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto+Slab&display=swap" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<link rel="shortcut icon" type="image/x-icon" href="https://www.villagedentaldtc.com/wp-content/uploads/2021/11/cropped-favicon-village-dental-192x192.png">
<!-- link for table end -->

</head>

<body>
  <button type="button" class="button">
      <span class="button__icon">
    <ion-icon name="arrow-back-outline"></ion-icon>
  </span>
  <span class="button__text">Go Back</span>

</button>

<h1>Appointment List</h1>
<br>
<div class="show">
              <div class="tab">
                <table class="data" id="dataTable" border="1"  cellpadding="15" cellspacing="0" >
                  <thead style="font-family:'Raleway', sans-serif; background-color: cyan; color: black;">
                    <tr align="center">
                      <th>Sl. No.</th>
                      <th>Status</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Number</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  
                  <tbody style="background-color: gainsboro; font-family: 'Roboto Slab', serif;" >
                  <?php
							require('dbconnect.php');
   							$sl=0;
							$query1=mysqli_query($con,"select * from contact_form");
							while($row=mysqli_fetch_array($query1))
								{ 
									$sl++;
								?>
					<tr align="center">
						<td><?php echo $sl; ?></td>
											<td style="color: green; text-transform: uppercase; font-weight: 800;">Booking Accepted</td>
                      <td style="color: black; text-transform: uppercase;"><?php echo $row['name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['number']; ?></td>
                      <td><?php echo $row['date']; ?></td>
										</tr>
										<?php } ?>     
                  </tbody>
                </table>
              </div>
            </div>
</body>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js" ></script>


<script type="text/javascript">
let btnBack = document.querySelector('button');
btnBack.addEventListener('click', () => {
    window.history.back();
});
</script>



</html>