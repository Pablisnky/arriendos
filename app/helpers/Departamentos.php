    <select class="select_1" name="departamento" id="Departamento" onchange="SeleccionarMunicipio_Colombia(this.form)">
        
        <?php 
        if(isset($ID_Inmueble)){?>
            <option><?php echo $registros["departamento"];?></option>   <?php
        }
        else{   ?>
            <option></option>   <?php
        }   ?>
        <Option>Amazonas</Option> <!-- Leticia -->
        <Option>Antioquía</Option> <!-- Medellin -->
        <Option>Arauca</Option> <!-- Arauca -->
        <Option>Atlantico</Option> <!-- Barranquilla -->
        <Option>Bolivar</Option><!-- Cartagena de Indias -->
        <Option>Boyacá</Option> <!--Tunja -->
        <Option>Caldas</Option> <!--Manizales -->
        <Option>Casanare</Option> <!--Yopal -->
        <Option>Cauca</Option> <!--Popayan -->
        <Option>Caquetá</Option> <!--Florencia -->
        <Option>César</Option> <!--Valledupar -->
        <Option>Chocó</Option>  <!--Quibdo -->
        <Option>Córdoba</Option> <!-- Montería -->
        <Option>Cundinamarca</Option> <!-- Bogota -->
        <Option>Guainía</Option> <!-- Puerto Inírida -->
        <Option>Guaviare</Option> <!-- San José -->
        <Option>Huila</Option> <!-- Neiva -->
        <Option>La Guajira</Option> <!-- Riohacha -->
        <Option>Magdalena</Option> <!-- Santa Marta -->
        <Option>Meta</Option> <!-- Villavicencio -->
        <Option>Nariño</Option> <!-- Pasto -->
        <Option>Norte de Santander</Option> <!-- Cucuta -->
        <Option>Putumayo</Option> <!-- Mocoa -->
        <Option>Quindío</Option> <!-- Armenia -->
        <Option>Risaralda</Option> <!-- Pereira -->
        <Option>San Andrés</Option> <!-- San Andrés -->
        <Option>Santander</Option> <!-- Bucaramanga -->
        <Option>Sucre</Option> <!-- Sincelejo -->
        <Option>Tolima</Option> <!-- Ibagué -->
        <Option>Valle del Cauca</Option> <!-- Cali -->
        <Option>Vaupés</Option> <!-- Mitú -->
        <Option>Vichada</Option> <!-- Puerto Carreño -->
    </select>