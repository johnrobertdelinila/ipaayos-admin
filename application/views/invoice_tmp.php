<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style type="text/css">
      .clearfix:after {
        content: "";
        display: table;
        clear: both;
      }
    </style>
  </head>
  <body style="position: relative;width: 21cm; height: 29.7cm; margin: 0 auto; color: #001028; background: #FFFFFF; font-family: Arial, sans-serif; font-size: 12px; font-family: Arial;">
    <header class="clearfix" style="padding: 10px 0; margin-bottom: 30px;">
      <div id="logo" style="text-align: center; margin-bottom: 10px;">
        <img src="http://phpstack-132936-544601.cloudwaysapps.com/assets/images/g.png" style="width: 125px; height: 28px;">
      </div>
      <h1 style=" border-top: 1px solid  #5D6975; border-bottom: 1px solid  #5D6975;color: #5D6975; font-size: 2.4em; line-height: 1.4em; font-weight: normal;text-align: center; margin: 0 0 20px 0; background: url(http://phpstack-132936-544601.cloudwaysapps.com/assets/images/dimension.png);"><?php echo $invoice_id; ?></h1>
      <div id="company" class="clearfix" style="white-space: nowrap; float: right; text-align: right;">
        <div style="white-space: nowrap;"><?php echo ucfirst($ArtistName); ?></div>
        <div><?php echo ucfirst($ArtistLocation); ?></div>
        <div><?php echo $ArtistEmail; ?></div>
      </div>
      <div id="project">
        <div style="white-space: nowrap;"><span style="color: #5D6975; text-align: left;width: 52px;margin-right: 10px;display: inline-block;font-size: 0.8em;">SERVICE :</span style="color: #5D6975; text-align: left;width: 52px;margin-right: 10px;display: inline-block;font-size: 0.8em;"><?php echo ucfirst($categoryName); ?></div>
        <div><span style="color: #5D6975; text-align: left;width: 52px;margin-right: 10px;display: inline-block;font-size: 0.8em;">CLIENT :</span> <?php echo ucfirst($userName); ?></div>
        <div><span style="color: #5D6975; text-align: left;width: 52px;margin-right: 10px;display: inline-block;font-size: 0.8em;">EMAIL :</span> <?php echo $userEmail; ?></div>
        <div><span style="color: #5D6975; text-align: left;width: 52px;margin-right: 10px;display: inline-block;font-size: 0.8em;">DATE :</span> <?php echo $booking_date; ?></div>
        <div><span style="color: #5D6975; text-align: left;width: 52px;margin-right: 10px;display: inline-block;font-size: 0.8em;">TIME :</span> <?php echo $booking_time; ?></div>
      </div>
    </header>
    <main>
      <table style="width: 100%; border-collapse: collapse; border-spacing: 0; margin-bottom: 20px;">
        <thead>
          <tr>
            <th class="service" style="vertical-align: top;  text-align: left;padding: 5px 20px; color: #5D6975;border-bottom: 1px solid #C1CED9; white-space: nowrap; font-weight: normal;">SERVICE</th>

            <th style="padding: 5px 20px; color: #5D6975; border-bottom: 1px solid #C1CED9; white-space: nowrap; font-weight: normal; text-align: center;">PRICE</th>
            <th style="padding: 5px 20px; color: #5D6975; border-bottom: 1px solid #C1CED9; white-space: nowrap; font-weight: normal; text-align: center;">MINTUES</th>
            <th style="padding: 5px 20px; color: #5D6975; border-bottom: 1px solid #C1CED9; white-space: nowrap; font-weight: normal; text-align: center;">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service" style="vertical-align: top;  padding: 20px;  text-align: left; background: #F5F5F5;"><?php echo ucfirst($categoryName); ?></td>
            <td class="unit" style="font-size: 1.2em;  padding: 20px; text-align: center; background: #F5F5F5;">₱<?php echo $category_amount; ?></td>
            <td class="qty" style="font-size: 1.2em;  padding: 20px; text-align: center; background: #F5F5F5;">0</td>
            <td class="total" style="font-size: 1.2em;  padding: 20px; text-align: center; background: #F5F5F5;">₱<?php echo $category_amount; ?></td>
          </tr>
          <tr>
            <td class="service" style="vertical-align: top;  padding: 20px;  text-align: left;"><?php echo ucfirst($ArtistName); ?> (Artist)</td>
            <td class="unit" style="font-size: 1.2em;  padding: 20px; text-align: center;">₱<?php echo $artist_amount; ?></td>
            <td class="qty" style="font-size: 1.2em;  padding: 20px; text-align: center;"><?php echo $working_min; ?></td>
            <td class="total" style="font-size: 1.2em;  padding: 20px; text-align: center;"><?php echo $artist_amount; ?></td>
          </tr>

          <tr>
            <td colspan="3" style="padding: 20px; text-align: center;">SUBTOTAL</td>
            <td class="total" style="font-size: 1.2em;  padding: 20px; text-align: center;">₱<?php echo $total_amount; ?></td>
          </tr>
          <!-- <tr>
            <td colspan="3" style="padding: 20px; text-align: center;">TAX 25%</td>
            <td class="total" style="font-size: 1.2em;  padding: 20px; text-align: center;">$1,300.00</td>
          </tr> -->
          <tr>
            <td colspan="3" class="grand total" style="border-top: 1px solid #5D6975; text-align: center; padding-top: 10px;">GRAND TOTAL</td>
            <td class="grand total" style="border-top: 1px solid #5D6975; text-align: center; padding-top: 10px;">₱<?php echo $total_amount; ?></td>
          </tr>
        </tbody>
      </table>

    </main>
    <footer style="color: #5D6975; width: 100%; height: 30px; position: absolute;  bottom: 0; border-top: 1px solid #C1CED9; padding: 8px 0; text-align: center;">
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>