<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Ticket</h4>
                  <p class="card-category">List of All Ticket</p>
          </div>
          <div class="card-body">
            
            
            <table id="example" class="table table-striped">
              <thead>
                <tr>
                  <th>
                    Ticket Details
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($ticket as $ticket) {
                ?>
                <tr>
                  <td class="py-1">
                    <div class="row ticket-card mt-3 pb-2">
                      <div class="col-1">
                        <img class="img-sm rounded-circle" src="<?php echo  base_url('/assets/images/faces-clipart/pic-1.png' ); ?>" width="30px" height="30px" alt="profile image">
                      </div>
                      <div class="ticket-details col-9">
                        <div class="d-flex" style="padding-bottom: 5px;">
                          <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap"><?php echo $ticket->userName ?> :</p>
                          <p class="font-weight-medium mr-1 mb-0"><?php echo '#'.$ticket->id; ?></p>
                          <p class="mar-1 mb-0 ellipsis"><?php if($ticket->status==0) { echo "Pending"; } elseif($ticket->status==1) { echo "Resolving Issue"; } elseif($ticket->status==2) { echo "Close"; } ?></p>
                          <p class="font-weight-bold mb-0 ellipsis"></p>
                        </div>
                        <p class="text-small text-gray"><?php echo $ticket->reason; ?></p>
                        <div class="row text-muted d-flex">
                          <div class="col-6 d-flex">
                            <p class="mb-0 mr-2">Ticket Time :</p>
                            <p class="Last-responded mr-2 mb-0"><?php echo date('M d, Y h:i A', $ticket->craeted_at); ?></p>
                          </div>
                          
                        </div>
                      </div>
                      <div class="ticket-actions col-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_ticket');?>?id=<?php echo $ticket->id; ?>&status=1"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                            <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_ticket');?>?id=<?php echo $ticket->id; ?>&status=2"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url('/Admin/ViewTicket');?>?id=<?php echo $ticket->id; ?>"><i class="fa fa-times text-danger fa-fw"></i>View Details</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>