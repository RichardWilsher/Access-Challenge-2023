<h1>Welcome <?=$patient->firstname?> to your portal!</h1>
<a href='/'>logout</a>
    <main class="content">
	
    <section id="patient-info">
        <h2>Patient Information</h2>(<a href='/access/request'>request changes</a>)
        
        <p>Name: <?=$patient->firstname?> <?=$patient->surname?></p>
        <table>
            <tr><td>Address: </td><td><?=$patient->address1?></td></tr>
            <tr><td></td><td><?=$patient->address2?></td></tr>
            <tr><td></td><td><?=$patient->address3?></td></tr>
            <tr><td>Town: </td><td><?=$patient->town?></td></tr>
            <tr><td>Postcode: </td><td><?=$patient->postcode?></td></tr></table>
        <p>Contact: #</p>
        <p>Contact Type: Patient</p>
      </section>

      <section id="referral-info">
        <h2>Referral Information</h2>
      <?php

      for($i=count($referals); $i > 0; $i--){
        
        echo '<div>';
        echo '<p>Referral Date: ' . $referals[$i-1]->datecreated . '</p>';
        echo '<p>Referral Number: ' . $referals[$i-1]->referralnumber . '</p>';
        echo '<p>Referring type: ' . $referals[$i-1]-> referaltype . '</p>';
        echo '<p>Referral Status: ' . $referals[$i-1]-> referalstatus . '</p>';
        echo '<p>Date Reviewed: ' . $referals[$i-1]-> datereviewed . '</p>';
        echo '</div>';
        echo '<br>';
        echo '<p> </p>';
        
        }?>
        </section>
    </main>