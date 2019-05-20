<modal v-if="showModalFReg" @close="showModalFReg = false">
        <h3 slot="header">Восстановление пароля</h3>
        <div slot="body">
          <div class="container">
          <div class="row">
            <div class="col-sm-12 my-auto">
              <div class="md-form">
                <input name="name" type="email" id="form1" class="form-control">
                <label for="form1">Введите почту</label>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div slot="footer" class="modal-footer">
          <div class="col-12 text-center">
            <button class="btn-sm col-12 btn-primary" type="Submit">Отправить</button>
          </div>
        </div>
</modal>