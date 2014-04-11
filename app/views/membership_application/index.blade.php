
<?php
    if($applications->isEmpty())
    {
        echo 'no applications';
    }
    else
    {
       
?>
<table style="width: 300px;">
    <thead>
        <tr>
            <td>
                Name
            </td>
            <td>
                Membership Fee
            </td>
        </tr>
    </thead>
    <tbody>
            <?php

            foreach($applications as $application)
            {
                if ($application->paid == 1)
                {
                    $link = "Has paid <a href='membership_applications/{$application->id}/paid/0'>[X]</a>";
                
                }
                else
                {
                    $link = "<a href='membership_applications/{$application->id}/paid/1'>Mark as paid</a>";
                
                }
                echo '<tr ><td style="border-bottom:1px solid black;">'. $application->first_name . ' ' . $application->last_name . '</td><td style="border-bottom:1px solid black;">'. $link;
            } 

            ?>

        </tbody>
</table>

<?php
    }
?>

<style>
    a
    {
        text-decoration: none;
    }
    
    a:visited 
    {
       color: blue;
      
    }
</style>
<h3>
<a href="/pet/membership_applications/create">+ create new application</a>
</h3>
