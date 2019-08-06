<div class="reservation-form-shadow">
   <form name="form2">
      <input type="hidden" ng-init="dados1.LE_Origem='<?=$origem?>'">
      <input type="hidden" ng-init="dados1.LE_CodigoTipo=2">
      <input type="hidden" ng-init="dados1.LE_CodigoProduto=757">
      <div class="location">
         <h3 id="bold">Nós podemos ligar agora pra você! Deixe seus dados!</h3>
         <div class="input-group pick-up">
            <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-user"></span></span>
            <input ng-required="true" ng-disabled="load" ng-model="dados1.LE_Nome" type="text" name="nome" class="form-control autocomplete-location" placeholder="Nome:">
         </div>
         <br>
         <div class="input-group pick-up">
            <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-tags"></span></span>
            <input ng-required="true" ng-disabled="load" ng-model="dados1.LE_Email" type="text" name="email" class="form-control autocomplete-location" placeholder="Email:">
         </div>
         <br>
         <div class="input-group pick-up">
            <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-earphone"></span></span>
            <input ng-required="true" ng-disabled="load" ng-model="dados1.LE_Telefone" type="text" name="telefone" class="form-control autocomplete-location" placeholder="Telefone:" mask="(99) 9-9999-9999">
         </div>
         <br>
         <div class="input-group pick-up">
            <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>
            <textarea ng-required="true" ng-disabled="load" ng-model="dados1.LE_Descricao" class="form-control autocomplete-location" name="mensagem" placeholder="Mensagem:" id="textarea"></textarea>
         </div>
        <!--  <label id="fontlabel">Selecione seu Modelo:</label>
         <div class="input-group pick-up">
            <span class="input-group-addon"><i class="fas fa-car fa-1x"></i></span>
            <select ng-required="true" ng-disabled="load" ng-model="dados1.LE_CodigoProduto" name="pneus" name="pneus" class="form-control autocomplete-location">
               <option value="753"> N BLUE ECO 205/55R16</option>
               <option value="754">N BLUE ECO 195/60R15</option>
               <option value="755">N Fera SU4 205/55R16</option>
            </select>
         </div> -->
      </div>
      <input ng-click="enviarLead(dados1)" ng-disabled="form2.$invalid || load" type="button" class="submit" name="button" value="Enviar">
   </form>
</div>
