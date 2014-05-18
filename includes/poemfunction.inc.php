<?php

	function display_poem() {
		echo "<pre>";
		$num = mt_rand(1, 1);
		switch($num) {
			case 1:
				echo "embers burn, but light the path 
toward death’s hollow, final laugh
but soon that laugh will freeze and cease
the world returns to cold, white peace
now waking from the icy grasp
new life comes to bloom at last
then, when the boys become the men
the embers finally come again 

the echo of our earthly bind
will bring the seasons all to mind
as we will change and so will they
but neither one is here to stay";
				break;

			case 2:
				echo "Spring is here and the day is bright
The tulips open as if smiling to the sky
The grass is green and children play 
as they take in the sun
Children prepare their seasonal lemonade and kool-aid stands
to make their first quarter
The birds start singing as they bathe in the morning sun
Spring has begun, and it's time to sing";
				break;

			case 3:
				echo "Summer is here and no school for the young 
it's time to play
It's the time of year when it seems 
there is no end to the day
The days are longer and the fun is now here
Time to play kick ball and kick the can 
as if there was no worry
Playgrounds are filled with screaming children 
on this happy day.
Children are lined up for ice cream 
as the ice cream truck nears
They are counting their change 
to see what to buy, as it appears
They jump up and down in glee 
for this feeling to never end
Summer is here again";
				break;

			case 4:
				echo "End of Fall; the leaves are gone
But in the beginning 
the colors appear
the yellows, oranges greens and reds 
Warm days and nights are still here 
soon the time change will be here and 
days will be shorter 
then the night is here";
				break;
		}


		echo "</pre>";
	}

?>