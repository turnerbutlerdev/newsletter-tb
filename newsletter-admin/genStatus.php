<?php
/**
 * Created by PhpStorm.
 * User: prasanjeet
 * Date: 5/9/18
 * Time: 10:47 AM
 */

error_reporting(E_ALL); ini_set('display_errors', 1);
include 'credDetail.php';
ini_set('memory_limit', '-1');
$statUpd=array('bruce@floridagold.net','jleathers@stocksigns.co.uk','info@8point3led.co.uk','info@8point3led.co.uk','info@8point3led.co.uk','info@8point3led.co.uk','sarahbennett3@hotmail.com','info@lightingroom.co.uk','jc@cribbassociates.co.uk','sara_ceri@talktalk.net','mdyos@shandhigson.co.uk','info@berkshirefountains.co.uk','Lisawilliamson@hotmail.co.uk','g.soglia@stonecapital.it','email@summertownclinic.co.uk','angelo.savva@hotmail.co.uk','jleathers@stocksigns.co.uk','ChrisGahr@aol.com','marilynforbes15@yahoo.co.uk','goudarzi_1973@yahoo.com','steveparkinson.1912@gmail.com','steveparkinson.1912@gmail.com','michael.dicker@heat-trace.com','JOHN@JOHNLIGHTFOOT.UK','naeem@nmenergy.co.uk','nterrett@btinternet.com','alan.williams@g2sgroup.com','alan.ferguson@oxfordlasers.com','angelapotter@live.co.uk','alex@impactsecuritysolutions.co.uk','Andcooke@hotmail.co.uk','altheascollon@aol.com','brian.murphy@c2business.co.uk','chrisg@geigers.co.uk','david.alexander@ironbridgecp.com','da@ironbridgecp.com','calvinsinghklien@hotmail.com','info@plymouthchiropractic.com','info@holisticare.co.uk','darronej@gmail.com','gift57@yahoo.com','ChrisGahr@aol.com','info@classicandmodernkitchens.co.uk','info@synergetix.eu','jeannette@cucinacatering.co.uk','email@summertownclinic.co.uk','jeannette@cucinacatering.co.uk','ormmai@hotmail.com','mjsteed@hotmail.co.uk','paul.clarke@inspec-international.com','pielec2@yahopo.co.uk','paulavraam@icmail.net','chris@mafdesignandbuild.co.uk','thomasliccioni@mistralcoolers.com','paulmewis@hotmail.com','prestigiousfires@primaind.co.uk','pdavies@qehbristol.co.uk','jlangw@yahoo.com','Russ@acornlodge.plus.com','albertlal111@gmail.com','b.heath@virgin.net','giuseppenotar84@hotmail.it','r_sport_uk@hotmail.com','richard.carty@netshield.co.uk','jase.zx10@ntlworld.com','jo_pumpfarm@tiscali.co.uk','reception@northcote.com','richard@hspuk.com','info@abbotslangleyclinic.co.uk','ram_devabhai@yahoo.co.uk','info@broadwater.co.uk','jay23kn@hotmail.com','sam@sp-service.co.uk','enquiries@james-fisher.com','enquiries@james-fisher.com','roy.williams@ovh.org.uk','Davidm@bmsteels.co.uk','info@thepeartree.co.uk','karen_godbold@tiscali.co.uk','davies.roxtobe@blueyonder.co.uk','enquiries@puritechuk.com','info@climbyourmountain.org','info@ibonhart.co.uk','info@cbdpools.co.uk','info@cbdmurals.co.uk','info@cbdpools.co.uk','info@mooredental.com','info@morganplc.com','jonathan.coombs@pinders.co.uk','stuartpa@cadmangroup.co.uk','info@gatewayfuneralservices.co.uk','james@tltg.co.uk','info@fane-acoustics.com','info@fane-acoustics.com','kimpoweruk@yahoo.co.uk','Norman.grainger@macscaffolding.com','steve@columbiagloballtd.com','newcastle@newcastle-furniture.co.uk','design@craighead-woolf.com','info@west12security.co.uk','adminglade@talktalkbusiness.net','post@saferwave.com','naeem@nmenergy.co.uk','info@onorach.com','john.sheehan@allensaccountants.com');

foreach($statUpd as $ind=>$val)
{
    echo "select * from `turner_butler_newsletter_client_main` WHERE `email_address` LIKE '%".$val."%' ; "."<br>" ;
    //echo $sqlN.'<br>';
    //$results = $connection->query($sql);

}

//die;
$sql='select email_address from turner_butler_newsletter_email_queue WHERE status=3';

$results = $connection->query($sql);

while ($row = $results->fetch_assoc()) {

        $sqlN="UPDATE `turner_butler_newsletter_client_main` SET `status`=1 WHERE `email_address` LIKE '%".$row['email_address']."%' LIMIT 10;";
         $results = $connection->query($sql);
         if($results)
         {
             echo 'Success<br>';
         }
         else{
             echo 'Error<br>';
    }

}


