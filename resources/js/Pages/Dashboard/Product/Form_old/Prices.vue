<template>
    <div class="row mb-2">
        <div class="col-3">
            <label for="purchase_price">Цена закупки</label>
        </div>
        <div class="col-4">
            <div class="input-group">
                <input class="form-control" name="purchase_price">
                <select class="form-control" name="purchase_currency">
                    <option>RUB</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label for="wholesale_price">Крупный ОПТ, цена</label>
        </div>
        <div class="col-4">
            <div class="input-group">
                <input class="form-control" name="wholesale_price">
                <input class="form-control" name="wholesale_qty" placeholder="Кол-во">
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label for="small_wholesale_price">Мелкий ОПТ, цена</label>
        </div>
        <div class="col-4">
            <div class="input-group">
                <input class="form-control" name="small_wholesale_price">
                <input class="form-control" name="small_wholesale_qty" placeholder="Кол-во">
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label for="price">Розница, цена</label>
        </div>
        <div class="col-2">
            <input class="form-control" name="price">
        </div>
    </div>

</template>