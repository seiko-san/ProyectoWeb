<?php
session_start();

if (!isset($_SESSION["nick_usuario"])) {
    header("Location: login.php");
}
?>


<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-7">
                <h2>Gestor de <b>Catalogos</b></h2>
            </div>
            <div class="col-sm-6">
                <a href="#agregarCategoria" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Catalogo</span></a>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                        <label for="checkbox1"></label>
                    </span>
                </td>
                <td>Thomas Hardy</td>
                <td>thomashardy@mail.com</td>
                <td>89 Chiaroscuro Rd, Portland, USA</td>
                <td>(171) 555-2222</td>
                <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox2" name="options[]" value="1">
                        <label for="checkbox2"></label>
                    </span>
                </td>
                <td>Dominique Perrier</td>
                <td>dominiqueperrier@mail.com</td>
                <td>Obere Str. 57, Berlin, Germany</td>
                <td>(313) 555-5735</td>
                <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox3" name="options[]" value="1">
                        <label for="checkbox3"></label>
                    </span>
                </td>
                <td>Maria Anders</td>
                <td>mariaanders@mail.com</td>
                <td>25, rue Lauriston, Paris, France</td>
                <td>(503) 555-9931</td>
                <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox4" name="options[]" value="1">
                        <label for="checkbox4"></label>
                    </span>
                </td>
                <td>Fran Wilson</td>
                <td>franwilson@mail.com</td>
                <td>C/ Araquil, 67, Madrid, Spain</td>
                <td>(204) 619-5731</td>
                <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr>					
            <tr>
                <td>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox5" name="options[]" value="1">
                        <label for="checkbox5"></label>
                    </span>
                </td>
                <td>Martin Blank</td>
                <td>martinblank@mail.com</td>
                <td>Via Monte Bianco 34, Turin, Italy</td>
                <td>(480) 631-2097</td>
                <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr> 
        </tbody>
    </table>
</div>


<!-- Agrego el Producto -->
<div id="agregarCategoria" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">						
                    <h4 class="modal-title">Agregar Catalogo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" id="descripcion" class="form-control" required>
                    </div>				
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="button" href="javascript:;" onclick="Guardar_categoria($('#nombre').val(), $('#descripcion').val());"  class="btn btn-success" value="Agregar">
                </div>
                
                <div id="resultado"></div>
                
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">						
                    <h4 class="modal-title">Edit Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" required>
                    </div>					
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">						
                    <h4 class="modal-title">Delete Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>