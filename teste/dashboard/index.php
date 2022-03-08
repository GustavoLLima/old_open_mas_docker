<!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
-->



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<!-- <script type="text/javascript" src="jquery-3.5.1.js"></script>

  <script type="text/javascript" src="2jquery.dataTables.min.js"></script> -->
  <!-- #<link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css"> -->

  <!-- <script src='dir.php'></script> -->

  <!-- <center><h1>Arquivos dos agentes JaCaMo</h1></center>
  <table id="files_table" class="display" style="width:100%">
    <thead>
      <tr>
        <th>ID</th>
        <th>File</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>File</th>
      </tr>
    </tfoot>
  </table> -->
  <!-- <script type="text/javascript">
    // var tbodyRef = document.getElementById('files_table').getElementsByTagName('tbody')[0];
    // // Insert a row at the end of table
    // var newRow = tbodyRef.insertRow();

    // // Insert a cell at the end of the row
    // var newCell = newRow.insertCell();

    // // Append a text node to the cell
    // var newText = document.createTextNode('new row');
    // newCell.appendChild(newText);

    files.forEach(function(file){
      // $("#files_table").find('tbody').append("<tr><td><button class='btnSubmit' type='button'>"+file+"</button></td></tr>");
      $("#files_table").find('tbody').append("<tr><td>"+file+"</td><td><button value='"+file+"' class='btnSubmit buttonSubmit' type='button'>"+file+"</button></td></tr>");
      // console.log(file);
    });
  </script> -->

  <!-- <table id="example2" class="display" style="width:100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Start date</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011/04/25</td>
        <td>$320,800</td>
      </tr>
      <tr>
        <td>Garrett Winters</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>63</td>
        <td>2011/07/25</td>
        <td>$170,750</td>
      </tr>
      <tr>
        <td>Ashton Cox</td>
        <td>Junior Technical Author</td>
        <td>San Francisco</td>
        <td>66</td>
        <td>2009/01/12</td>
        <td>$86,000</td>
      </tr>
      <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>2012/03/29</td>
        <td>$433,060</td>
      </tr>
      <tr>
        <td>Airi Satou</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>33</td>
        <td>2008/11/28</td>
        <td>$162,700</td>
      </tr>
      <tr>
        <td>Brielle Williamson</td>
        <td>Integration Specialist</td>
        <td>New York</td>
        <td>61</td>
        <td>2012/12/02</td>
        <td>$372,000</td>
      </tr>
      <tr>
        <td>Herrod Chandler</td>
        <td>Sales Assistant</td>
        <td>San Francisco</td>
        <td>59</td>
        <td>2012/08/06</td>
        <td>$137,500</td>
      </tr>
      <tr>
        <td>Rhona Davidson</td>
        <td>Integration Specialist</td>
        <td>Tokyo</td>
        <td>55</td>
        <td>2010/10/14</td>
        <td>$327,900</td>
      </tr>
      <tr>
        <td>Colleen Hurst</td>
        <td>Javascript Developer</td>
        <td>San Francisco</td>
        <td>39</td>
        <td>2009/09/15</td>
        <td>$205,500</td>
      </tr>
      <tr>
        <td>Sonya Frost</td>
        <td>Software Engineer</td>
        <td>Edinburgh</td>
        <td>23</td>
        <td>2008/12/13</td>
        <td>$103,600</td>
      </tr>
      <tr>
        <td>Jena Gaines</td>
        <td>Office Manager</td>
        <td>London</td>
        <td>30</td>
        <td>2008/12/19</td>
        <td>$90,560</td>
      </tr>
      <tr>
        <td>Quinn Flynn</td>
        <td>Support Lead</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>2013/03/03</td>
        <td>$342,000</td>
      </tr>
      <tr>
        <td>Charde Marshall</td>
        <td>Regional Director</td>
        <td>San Francisco</td>
        <td>36</td>
        <td>2008/10/16</td>
        <td>$470,600</td>
      </tr>
      <tr>
        <td>Haley Kennedy</td>
        <td>Senior Marketing Designer</td>
        <td>London</td>
        <td>43</td>
        <td>2012/12/18</td>
        <td>$313,500</td>
      </tr>
      <tr>
        <td>Tatyana Fitzpatrick</td>
        <td>Regional Director</td>
        <td>London</td>
        <td>19</td>
        <td>2010/03/17</td>
        <td>$385,750</td>
      </tr>
      <tr>
        <td>Michael Silva</td>
        <td>Marketing Designer</td>
        <td>London</td>
        <td>66</td>
        <td>2012/11/27</td>
        <td>$198,500</td>
      </tr>
      <tr>
        <td>Paul Byrd</td>
        <td>Chief Financial Officer (CFO)</td>
        <td>New York</td>
        <td>64</td>
        <td>2010/06/09</td>
        <td>$725,000</td>
      </tr>
      <tr>
        <td>Gloria Little</td>
        <td>Systems Administrator</td>
        <td>New York</td>
        <td>59</td>
        <td>2009/04/10</td>
        <td>$237,500</td>
      </tr>
      <tr>
        <td>Bradley Greer</td>
        <td>Software Engineer</td>
        <td>London</td>
        <td>41</td>
        <td>2012/10/13</td>
        <td>$132,000</td>
      </tr>
      <tr>
        <td>Dai Rios</td>
        <td>Personnel Lead</td>
        <td>Edinburgh</td>
        <td>35</td>
        <td>2012/09/26</td>
        <td>$217,500</td>
      </tr>
      <tr>
        <td>Jenette Caldwell</td>
        <td>Development Lead</td>
        <td>New York</td>
        <td>30</td>
        <td>2011/09/03</td>
        <td>$345,000</td>
      </tr>
      <tr>
        <td>Yuri Berry</td>
        <td>Chief Marketing Officer (CMO)</td>
        <td>New York</td>
        <td>40</td>
        <td>2009/06/25</td>
        <td>$675,000</td>
      </tr>
      <tr>
        <td>Caesar Vance</td>
        <td>Pre-Sales Support</td>
        <td>New York</td>
        <td>21</td>
        <td>2011/12/12</td>
        <td>$106,450</td>
      </tr>
      <tr>
        <td>Doris Wilder</td>
        <td>Sales Assistant</td>
        <td>Sydney</td>
        <td>23</td>
        <td>2010/09/20</td>
        <td>$85,600</td>
      </tr>
      <tr>
        <td>Angelica Ramos</td>
        <td>Chief Executive Officer (CEO)</td>
        <td>London</td>
        <td>47</td>
        <td>2009/10/09</td>
        <td>$1,200,000</td>
      </tr>
      <tr>
        <td>Gavin Joyce</td>
        <td>Developer</td>
        <td>Edinburgh</td>
        <td>42</td>
        <td>2010/12/22</td>
        <td>$92,575</td>
      </tr>
      <tr>
        <td>Jennifer Chang</td>
        <td>Regional Director</td>
        <td>Singapore</td>
        <td>28</td>
        <td>2010/11/14</td>
        <td>$357,650</td>
      </tr>
      <tr>
        <td>Brenden Wagner</td>
        <td>Software Engineer</td>
        <td>San Francisco</td>
        <td>28</td>
        <td>2011/06/07</td>
        <td>$206,850</td>
      </tr>
      <tr>
        <td>Fiona Green</td>
        <td>Chief Operating Officer (COO)</td>
        <td>San Francisco</td>
        <td>48</td>
        <td>2010/03/11</td>
        <td>$850,000</td>
      </tr>
      <tr>
        <td>Shou Itou</td>
        <td>Regional Marketing</td>
        <td>Tokyo</td>
        <td>20</td>
        <td>2011/08/14</td>
        <td>$163,000</td>
      </tr>
      <tr>
        <td>Michelle House</td>
        <td>Integration Specialist</td>
        <td>Sydney</td>
        <td>37</td>
        <td>2011/06/02</td>
        <td>$95,400</td>
      </tr>
      <tr>
        <td>Suki Burks</td>
        <td>Developer</td>
        <td>London</td>
        <td>53</td>
        <td>2009/10/22</td>
        <td>$114,500</td>
      </tr>
      <tr>
        <td>Prescott Bartlett</td>
        <td>Technical Author</td>
        <td>London</td>
        <td>27</td>
        <td>2011/05/07</td>
        <td>$145,000</td>
      </tr>
      <tr>
        <td>Gavin Cortez</td>
        <td>Team Leader</td>
        <td>San Francisco</td>
        <td>22</td>
        <td>2008/10/26</td>
        <td>$235,500</td>
      </tr>
      <tr>
        <td>Martena Mccray</td>
        <td>Post-Sales support</td>
        <td>Edinburgh</td>
        <td>46</td>
        <td>2011/03/09</td>
        <td>$324,050</td>
      </tr>
      <tr>
        <td>Unity Butler</td>
        <td>Marketing Designer</td>
        <td>San Francisco</td>
        <td>47</td>
        <td>2009/12/09</td>
        <td>$85,675</td>
      </tr>
      <tr>
        <td>Howard Hatfield</td>
        <td>Office Manager</td>
        <td>San Francisco</td>
        <td>51</td>
        <td>2008/12/16</td>
        <td>$164,500</td>
      </tr>
      <tr>
        <td>Hope Fuentes</td>
        <td>Secretary</td>
        <td>San Francisco</td>
        <td>41</td>
        <td>2010/02/12</td>
        <td>$109,850</td>
      </tr>
      <tr>
        <td>Vivian Harrell</td>
        <td>Financial Controller</td>
        <td>San Francisco</td>
        <td>62</td>
        <td>2009/02/14</td>
        <td>$452,500</td>
      </tr>
      <tr>
        <td>Timothy Mooney</td>
        <td>Office Manager</td>
        <td>London</td>
        <td>37</td>
        <td>2008/12/11</td>
        <td>$136,200</td>
      </tr>
      <tr>
        <td>Jackson Bradshaw</td>
        <td>Director</td>
        <td>New York</td>
        <td>65</td>
        <td>2008/09/26</td>
        <td>$645,750</td>
      </tr>
      <tr>
        <td>Olivia Liang</td>
        <td>Support Engineer</td>
        <td>Singapore</td>
        <td>64</td>
        <td>2011/02/03</td>
        <td>$234,500</td>
      </tr>
      <tr>
        <td>Bruno Nash</td>
        <td>Software Engineer</td>
        <td>London</td>
        <td>38</td>
        <td>2011/05/03</td>
        <td>$163,500</td>
      </tr>
      <tr>
        <td>Sakura Yamamoto</td>
        <td>Support Engineer</td>
        <td>Tokyo</td>
        <td>37</td>
        <td>2009/08/19</td>
        <td>$139,575</td>
      </tr>
      <tr>
        <td>Thor Walton</td>
        <td>Developer</td>
        <td>New York</td>
        <td>61</td>
        <td>2013/08/11</td>
        <td>$98,540</td>
      </tr>
      <tr>
        <td>Finn Camacho</td>
        <td>Support Engineer</td>
        <td>San Francisco</td>
        <td>47</td>
        <td>2009/07/07</td>
        <td>$87,500</td>
      </tr>
      <tr>
        <td>Serge Baldwin</td>
        <td>Data Coordinator</td>
        <td>Singapore</td>
        <td>64</td>
        <td>2012/04/09</td>
        <td>$138,575</td>
      </tr>
      <tr>
        <td>Zenaida Frank</td>
        <td>Software Engineer</td>
        <td>New York</td>
        <td>63</td>
        <td>2010/01/04</td>
        <td>$125,250</td>
      </tr>
      <tr>
        <td>Zorita Serrano</td>
        <td>Software Engineer</td>
        <td>San Francisco</td>
        <td>56</td>
        <td>2012/06/01</td>
        <td>$115,000</td>
      </tr>
      <tr>
        <td>Jennifer Acosta</td>
        <td>Junior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>43</td>
        <td>2013/02/01</td>
        <td>$75,650</td>
      </tr>
      <tr>
        <td>Cara Stevens</td>
        <td>Sales Assistant</td>
        <td>New York</td>
        <td>46</td>
        <td>2011/12/06</td>
        <td>$145,600</td>
      </tr>
      <tr>
        <td>Hermione Butler</td>
        <td>Regional Director</td>
        <td>London</td>
        <td>47</td>
        <td>2011/03/21</td>
        <td>$356,250</td>
      </tr>
      <tr>
        <td>Lael Greer</td>
        <td>Systems Administrator</td>
        <td>London</td>
        <td>21</td>
        <td>2009/02/27</td>
        <td>$103,500</td>
      </tr>
      <tr>
        <td>Jonas Alexander</td>
        <td>Developer</td>
        <td>San Francisco</td>
        <td>30</td>
        <td>2010/07/14</td>
        <td>$86,500</td>
      </tr>
      <tr>
        <td>Shad Decker</td>
        <td>Regional Director</td>
        <td>Edinburgh</td>
        <td>51</td>
        <td>2008/11/13</td>
        <td>$183,000</td>
      </tr>
      <tr>
        <td>Michael Bruce</td>
        <td>Javascript Developer</td>
        <td>Singapore</td>
        <td>29</td>
        <td>2011/06/27</td>
        <td>$183,000</td>
      </tr>
      <tr>
        <td>Donna Snider</td>
        <td>Customer Support</td>
        <td>New York</td>
        <td>27</td>
        <td>2011/01/25</td>
        <td>$112,000</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Start date</th>
        <th>Salary</th>
      </tr>
    </tfoot>
  </table> -->

  <?php
  $out = array();
  foreach (glob('../jacamo/src/src/agt/list/*.asl') as $filename) {
    $p = pathinfo($filename);
    $out[] = $p['filename'];
  }

  // foreach ($out as $aa) {
  //   echo $aa;
  //   echo "<br>";
  // }

  echo "<center><h1>List of agents</h1></center>";
  echo '
  <table id="example" class="display" style="width:100%">
  <thead>
  <tr>
  <th>ID</th>
  <th>Sugar</th>
  <th>Metabolism</th>
  <th>Vision</th>
  <th>File</th>
  <th>Traveling Path</th>
  </tr>
  </thead>
  <tbody>
  ';

//$file_name = "important/output.txt";
  $file_name =str_replace(["[","]", "\""],"", $_ENV["output_agents"]);

  if(file_exists($file_name)){
    $handle = fopen($file_name, "r");
    if ($handle) {
     $c = 0;
    // echo "<h1>List of all dead agents</h1>";
  		// echo '
  		// <table id="example" class="display" style="width:100%">
  		//   <thead>
  		//     <tr>
  		//       <th>ID</th>
  		//     <th>Sugar</th>
  		//     <th>Metabolism</th>
  		//     <th>Vision</th>
  		//     </tr>
  		//   </thead>
  		//   <tbody>
  	 //  ';

     while (($lines = fgets($handle)) !== false) {
       echo "<tr>";
       $c++;
          // process the line read.
          // echo $line;
       $line = explode(" ", $lines);

          #print_r($line);

          #print(sizeof($line));

          #print_r($line[1]."\n");

       $line = str_replace(']', ' ', $line);

          #print_r($line);

          #echo "att1: ".$line[1]."att2: ".$line[2]."att3: ".$line[3]."att4: ".$line[4]."\n";

       echo '<td class="ids">'.$line[1].'</td>';
       echo '<td>'.$line[2].'</td>';
       echo '<td>'.$line[3].'</td>';
       echo '<td class="vision">'.$line[4].'</td>';
       if (in_array(($line[1]), $out)) { 
        echo '<td>'."<button value='".$line[1]."' class='btnSubmit buttonSubmit' type='button'>".$line[1]."</button>".'</td>';
       }
       else
        echo '<td>'."No File".'</td>';
       echo '<td>'.$line[5].'</td>';
       echo "</tr>";

          // foreach ($line as $word) {
          // 	echo "att1: ".$word[1]."att2: ".$word[2]."att3: ".$word[3]."att4: ".$word[4]."\n";
          // }
     }

     fclose($handle);

     echo "
     </tbody>
     <tfoot>
     <tr>
     <th>ID</th>
     <th>Sugar</th>
     <th>Metabolism</th>
     <th>Vision</th>
     <th>File</th>
     <th>Traveling Path</th>
     </tr>
     </tfoot>
     </table>";

     echo "<center><h1>Biggest Path:</h1></center>";
     echo "<center><h3 id='biggest_path'></h3></center>";

      // echo "<br><br><br><br><center><h1>ID x Vision</h1></center>";

      // echo
      // "<div>
      //   <canvas id='myChart'></canvas>
      // </div>";

      #while(true){};
   }
 }
 ?>

 <br> <br>
 <center><h1>Conteúdo de Arquivo</h1></center>
  <pre id="contents" class="normal"></pre>

  <script type="text/javascript">
    function populatePre(url) {
      var xhr = new XMLHttpRequest();
      xhr.onload = function () {
        document.getElementById('contents').textContent = this.responseText;
      };
      xhr.open('GET', url);
      xhr.send();
    }
    populatePre('../jacamo/src/src/agt/list/1.asl');
  </script>

 <style>
  tfoot input {
    width: 100%;
    padding: 3px;
    box-sizing: border-box;
  }

  pre {
    white-space: pre-wrap;       /* Since CSS 2.1 */
    white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
    white-space: -pre-wrap;      /* Opera 4-6 */
    white-space: -o-pre-wrap;    /* Opera 7 */
    word-wrap: break-word;       /* Internet Explorer 5.5+ */
  }
</style>


<!-- <table id="example">
  <thead>
    <tr>
      <th>Month</th>
      <th>Savings</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td>Sum</td>
      <td>$180</td>
    </tr>
  </tfoot>
</table> -->


<script type="text/javascript">
  var ids = [];
  var vision = [];
  var final_array = [];

	// $(document).ready( function () {
	//     $('#example').DataTable();
	// } );

  $(document).ready(function() {
    //alert(files.includes('800'));
    // console.log(files);
    $(".buttonSubmit").click(function() {
      var fired_button = $(this).html();
      //alert("value: "+fired_button);

      var url = '../jacamo/src/src/agt/list/'+fired_button+'.asl';
      var xhr = new XMLHttpRequest();
      xhr.onload = function () {
        document.getElementById('contents').textContent = this.responseText;
      };
      xhr.open('GET', url);
      xhr.send();
    });

    $('#files_table').DataTable();
    // $(".btnSubmit").click(function(){
    //   var button = $(this).html();
    //   alert(button);

    //   var url = '../jacamo/src/src/agt/list/'+button+'.asl';
    //   var xhr = new XMLHttpRequest();
    //   xhr.onload = function () {
    //     document.getElementById('contents').textContent = this.responseText;
    //   };
    //   xhr.open('GET', url);
    //   xhr.send();
    // });


    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
      var title = $(this).text();
      $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );

    // DataTable
    var table = $('#example').DataTable({
      initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
              var that = this;

              $( 'input', this.footer() ).on( 'keyup change clear', function () {
                if ( that.search() !== this.value ) {
                  that
                  .search( this.value )
                  .draw();
                }
              } );
            } );
          }
        });

  } );

  $('#example .ids').each(function() {
    // alert($(this).html());
    ids.push($(this).html())
  });

  $('#example .vision').each(function() {
    // alert($(this).html());
    vision.push($(this).html())
  });

  for(var i=0; i<vision.length; i++) {
    final_array.push({x: ids[i].replace(/\D/g, ""), y: vision[i].replace(/\D/g, "")});
  }

  // for(var i=0; i<final_array.length; i++) {
  //   console.log(final_array[i]);
  // }

  var maxlen=0;
  var tdLongest;
  $('table td').each(function(){
    if($(this).text().length > maxlen)
    {
      maxlen = $(this).text().length;
      tdLongest = $(this);
    }
  });

  // console.log(tdLongest.text());
  // console.log(maxlen);

  $('#biggest_path').text(tdLongest.text());

  //tdLongest.closest('tr').css('background-color','#A52A2A');

  const data = {
    datasets: [{
      label: 'ID x Vision',
      data: final_array,
    // data: [{
    //   x: -10,
    //   y: 0
    // }, {
    //   x: 0,
    //   y: 10
    // }, {
    //   x: 10,
    //   y: 5
    // }, {
    //   x: 0.5,
    //   y: 5.5
    // }],
    backgroundColor: 'rgb(255, 99, 132)'
  }],
};

const config = {
  type: 'scatter',
  data: data,
  options: {
    scales: {
      x: {
        type: 'linear',
        position: 'bottom',
        display: true,
        label: 'ID'
      },
      y: {
        display: true,
        label: 'Vision'
      }
    }
  }
};

// var myChart = new Chart(
//     document.getElementById('myChart'),
//     config
//   );

//   setTimeout(function(){
//    window.location.reload(1);
// }, 5000);



// const labels = [
//   'January',
//   'February',
//   'March',
//   'April',
//   'May',
//   'June',
// ];
// const data = {
//   // labels: labels,
//   datasets: [{
//     label: 'Vision',
//     backgroundColor: 'rgb(255, 99, 132)',
//     borderColor: 'rgb(255, 99, 132)',
//     data: final_array,
//   }]
// };

//   const config = {
//   type: 'line',
//   data,
//   options: {}
// };

// var myChart = new Chart(
//     document.getElementById('myChart'),
//     config
//   );

// if($('#example .ids').length < 10000)
//     setTimeout(function(){
//      window.location.reload(1);
//   }, 5000);
</script>

