<!-- Modal -->
<?php
session_start();
?>
<div
  class="modal fade"
  id="addNoteModal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="addNoteModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNoteModalLabel">Agregar Nota</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario para agregar nueva nota -->
        <form id="addNoteForm">
          <div class="form-group">
            <label for="noteName">Nombre</label>
            <input 
            value="<?php echo $_SESSION['nombre']; ?>"
              type="text"
              class="form-control"
              id="noteName"
              name="Nombre"
              
            />
          </div>
          <div class="form-group">
            <label for="noteContent">Nota</label>
            <textarea
              class="form-control"
              id="noteContent"
              name="Nota"
              required
            ></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary">Guardar Nota</button>
        </form>
      </div>
    </div>
  </div>
</div>
