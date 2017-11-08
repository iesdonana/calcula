<?php

function seleccion(array $elementos, ?string $actual, $nombre): void
{
?>
    <select id="<?= $nombre ?>" name="<?= $nombre ?>">
        <?php
        foreach ($elementos as $v) {
            option($actual, $v);
        }
        ?>
    </select>
<?php
}

function option($op, $v)
{
?>
    <option value="<?= $v ?>" <?= selected($op, $v) ?> >
        <?= $v ?>
    </option>
<?php
}

function selected(?string $o, string $v): string
{
    return $o == $v ? 'selected' : '';
}
