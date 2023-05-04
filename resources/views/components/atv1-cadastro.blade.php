<!-- Default form contact -->
<form class="text-center border border-light p-5" action="#!">

    <p class="h4 mb-4">Deseja participar da promoção?</p>

    <!-- Name -->
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Nome">

    <!-- Email -->
    <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

    <input type="email" id="defaultContactFormCelular" class="form-control mb-4" placeholder="Número de Celular">

    <!-- Subject -->
    <label>Subject</label>
    <select class="browser-default custom-select mb-4">
        <option value="" disabled>Escolha a opção</option>
        <option value="1" selected>Desejo comprar</option>
        <option value="2">Desejo ver produtos semelhantes</option>
        <option value="3">Desejo acompanhar a promoção</option>
    </select>

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Se desejar, escreva uma mensagem"></textarea>
    </div>

    <!-- Copy -->
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Me envie uma cópia dessa mensagem</label>
    </div>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit">Participar</button>

</form>