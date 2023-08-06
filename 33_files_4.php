<?php
//Writing and Appending to file in php Reads
//writing to a file in php and text file name = myfile2,txt used file in 33_file_4.php

// $amit = fopen("myfile2.txt", "w"); /* $amit ke jagah kuch bhi le sakte hai wo serf donet karne ke liye hai
//                                     fopen ko, and (r=read),(w=write) hota hai
// जेसे ही php मे write mode मे खोलेंगे वेसे ही फ़ाइल create हो जाएगा जेसे की fopen("myfile3.txt", "w")
// fopen("myfile4.txt", "w") इस तरह से दल ने से myfile3 and myfile4 again create हो जाएगा folder */
// fwrite($amit,"this is the best file on this computer.\n");
// fwrite($amit,"this is best boy.\n");
// fwrite($amit,"this is best friends avinash.");
// fclose($amit);

//Appendingto a file in php
$amit = fopen("myfile2.txt", "a ");//यदि आप अपने file मे content add करना चाहते है तो append  mode यूज्ड  करते है   append का मतलब होता है अंत मे ज़ोर देना और जितना बार refress करेंगे उतनी बार add करते जाएगा containt 
fwrite($amit,"this is the best file on this computer.\n");
fclose($amit);
?>

