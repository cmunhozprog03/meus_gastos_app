<div>
    <h3>Criar Registro</h3>
    <hr>
    {{$amount}}
    <form action="">
        <p>
            <label>Descrição</label>
            <input type="text" name="description" class="shadow border-t" wire:model="description">
        </p>
    
        <p>
            <label>Valor</label>
            <input type="text" name="amount" class="shadow border-t" wire:model="amount">
        </p>
    
        <p>
            <label>Operação</label>
            <select name="" id="" class="shadow border-t" wire:model="type" >
                <option value="1">Entrada</option>
                <option value="2">Saída</option>
            </select>
        </p>
        <button type="submit">Criar Registro</button>
    </form>

</div>
