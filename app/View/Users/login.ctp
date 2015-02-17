<div class="page-header">
	<h1>
		Make Your Tuition Worthwhile
	</h1>
</div>

<?= $this->Form->create("User", array(
	"inputDefaults" => array(
		"div" => "form-group",
		"label" => array("class" => "col-sm-4 control-label"),
		"wrapInput" => "col-sm-6",
		"class" => "form-control"
		),
	"class" => "form-horizontal"
	)) ?>

<?= $this->Form->input("campus_id", array("type" => "select", "empty" => "Choose One", "label" => "Your College")) ?>
<?= $this->Form->input("email", array("label" => "Your College Email")) ?>

<?= $this->Form->end();