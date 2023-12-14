<!--
<div class="main-wrapper__reviews--filter_categories-item">
    <form class="filter-form">
        <label for="filter_partner">Partner:</label>
        <select name="name_filter_partner select_filter" id="filter_partner">
            <option value="all">All</option>
            <?php foreach ($company_array as $value) { ?>
            	<option value="<?= $value; ?>"><?= $value; ?></option>
            <?php } ?>
        </select>
    </form>
</div>
-->

<div class="main-wrapper__reviews--filter_categories-item">
    <form class="filter-form">
        <label for="filter_features">Features:</label>
        <select name="name_filter_features select_filter" id="filter_features">
            <option value="all">All</option>
            <?php foreach ($features_array as $value) { ?>
            	<option value="<?= $value; ?>"><?= $value; ?></option>
            <?php } ?>
        </select>
    </form>
</div>

<!--
<div class="main-wrapper__reviews--filter_categories-item">
    <form class="filter-form">
        <label for="filter_from">From:</label>
        <select name="name_filter_from select_filter" id="filter_from">
            <option value="all">All</option>
            <?php foreach ($address_array as $value) { ?>
            	<option value="<?= $value; ?>"><?= $value; ?></option>
            <?php } ?>
        </select>
    </form>
</div>

-->