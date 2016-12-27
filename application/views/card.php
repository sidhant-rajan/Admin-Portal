<div class="hoverable col s12 m2">
          <div class="card">
              <div class="card-image c1" id="card-image">
                 <a class="waves-effect" href="#modal1"><div style="width:191px;height: 251px;"><img class="responsive-img" src="<?php echo base_url();echo $row->src;?>" width="191px" height="251px"></div></a>
                 <div class="tab1" id="t1"><a class="btn btn-small"> <i class="material-icons">shopping_cart</i>&nbsp;&nbsp;Add to Cart</a></div>
              </div>
              <div class="card-content content2" style="padding: 3px !important;font-size: 18px;">
              <!--div><center><B>Book</B>
                <a class="btn-floating btn-small waves-effect waves-light teal lighten-2"  href="#modal1" style="margin-left: 50%;"><i class="material-icons">launch</i></a> </center>
               
              </div-->
              <center><B><?php echo $row->name;?></B></center>
             &nbsp;&nbsp;<font color="grey" size="1">English, Paperback, Eishes Chayil, Judy</font>
              <center><B>&nbsp;&nbsp;&#8377;<?php $p=($row->discount*$row->price)/100;
                    $new=$row->price-$p;
                    echo $new;
                    ?><font color="grey" size="2">&#8377; <strike><?php echo $row->price;?></font></strike></B>&nbsp;&nbsp;<font color="green"><?php echo $row->discount;echo "%";?></font></center>
              <div class="hidee">YYUVhxzvvmj</div>
               </div>
          </div>
</div>
