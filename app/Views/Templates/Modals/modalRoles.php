<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="formRol" id="formRol">
                    <div class="form-group">
                        <label class="control-label">Nombre</label>
                        <input class="form-control" id="rolName" name="rolName" type="text" placeholder="Nombre del rol"
                               required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Descripción</label>
                        <textarea class="form-control" rows="2" name="rolDescription" id="rolDescription"
                                  placeholder="Descripción del rol"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleSelect1">Estado</label>
                        <select class="form-control" id="rolStatus" name="rolStatus" required>
                            <option value="active">Activo</option>
                            <option value="inactive">Inactivo</option>
                        </select>
                    </div>

                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>