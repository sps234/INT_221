<h1> URL route </h1>

<!-- <a href = "<?=url('opt/1/mon')?>">Monday</a> <br>
<a href = "<?=url('opt/2/tuesday')?> "> Tuesday</a> <br>
<a href = "<?=url('opt/3')?>">Wednesday</a> <br> -->

<a href =" <?=route( 'stree', ['id'=>1, 'type' => 'mon']) ?> "> first page </a> <br>
<a href = " <?=route( 'stree', ['id'=>2, 'type' => 'tues'] ) ?> "> second page </a> <br>