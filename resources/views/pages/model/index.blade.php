@extends('back')

@section('content')
    <section class="panel panel-featured panel-featured-primary">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Model list</h2>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-md">
                        <a href="page-find-models.html" class="btn btn-primary">Add new model for booking <i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <table class="table table-hover table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                <tr>
                    <th>Studnet name, surename</th>
                    <th>Procedure name</th>
                    <th>Date</th>
                    <th>Model name, surename</th>
                    <th>Model phone number</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Sabīne Ozola</td>
                    <td>Manicure + nail polish</td>
                    <td>07-Nov-2014 11:00, Pirmdiena</td>
                    <td>Zorina Abreu</td>
                    <td>23492478</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Raimonds Pabrieza</td>
                    <td>Gel nail extention</td>
                    <td>08-Oct-2014 12:00, Otrdiena</td>
                    <td>Zhen Abu-Zahra</td>
                    <td>26485898</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Zane Dmitrijeva</td>
                    <td>Waxing</td>
                    <td>08-Nov-2014 13:00, Trešdiena</td>
                    <td>Zhanetta Adpencilye</td>
                    <td>27887345</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Kristīne Pūliņa</td>
                    <td>Lash extention</td>
                    <td>09-Oct-2014 14:00, Ceturtdiena</td>
                    <td>Yunzhe Afonso</td>
                    <td>28082510</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Baiba Antonovica</td>
                    <td>Gel nail extention with design</td>
                    <td>19-Nov-2014 15:00, Piektdiena</td>
                    <td>Youngjin Ahn</td>
                    <td>24074050</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Judite Vatere</td>
                    <td>Manicure + gel nail polish</td>
                    <td>11-Oct-2014 16:00, Otrdiena</td>
                    <td>Yu Ahn</td>
                    <td>24261214</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Zuzi Pavlíková</td>
                    <td>French manicure</td>
                    <td>08-Nov-2014 17:00, Pirmdiena</td>
                    <td>Yoon Akin-Aderibigbe</td>
                    <td>28425047</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sintija Pātare</td>
                    <td>European manicure</td>
                    <td>09-Oct-2014 18:00, Otrdiena</td>
                    <td>Yookyung Alexander</td>
                    <td>25279879</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sintija Trušinska</td>
                    <td>Manicure + nail polish</td>
                    <td>09-Nov-2014 18:00, Trešdiena</td>
                    <td>Yi-Shiuan Alsamdan</td>
                    <td>24645977</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Baiba Mīļumiņa</td>
                    <td>Gel nail extention</td>
                    <td>11-Oct-2014 19:00, Ceturtdiena</td>
                    <td>Yingda Alter</td>
                    <td>22654535</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Linda Teša</td>
                    <td>Waxing</td>
                    <td>11-Nov-2014 18:00, Otrdiena</td>
                    <td>Ying Altmann</td>
                    <td>29436949</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Jeļena Petrova</td>
                    <td>Lash extention</td>
                    <td>11-Oct-2014 17:00, Otrdiena</td>
                    <td>Yi-Feng Alvarez</td>
                    <td>29173738</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sabīne Ozola</td>
                    <td>Gel nail extention with design</td>
                    <td>12-Nov-2014 16:00, Otrdiena</td>
                    <td>Yi Aramendia</td>
                    <td>23283750</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Raimonds Pabrieza</td>
                    <td>Manicure + gel nail polish</td>
                    <td>13-Oct-2014 15:00, Pirmdiena</td>
                    <td>Yaya Ashkenazi</td>
                    <td>24266333</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Zane Dmitrijeva</td>
                    <td>French manicure</td>
                    <td>07-Nov-2014 11:00, Otrdiena</td>
                    <td>Yat-Lun Atri</td>
                    <td>23490713</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Kristīne Pūliņa</td>
                    <td>European manicure</td>
                    <td>08-Oct-2014 11:00, Trešdiena</td>
                    <td>Yasuhiro Au</td>
                    <td>29398443</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Baiba Antonovica</td>
                    <td>Manicure + nail polish</td>
                    <td>09-Nov-2014 11:00, Ceturtdiena</td>
                    <td>Yanwen Aurori</td>
                    <td>22283068</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Judite Vatere</td>
                    <td>Gel nail extention</td>
                    <td>09-Oct-2014 13:00, Piektdiena</td>
                    <td>Yan Austin</td>
                    <td>28971690</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Zuzi Pavlíková</td>
                    <td>Waxing</td>
                    <td>11-Nov-2014 11:00, Otrdiena</td>
                    <td>Ya-Han Bagdat</td>
                    <td>26210376</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sintija Pātare</td>
                    <td>Lash extention</td>
                    <td>11-Oct-2014 12:00, Otrdiena</td>
                    <td>Yael Bala</td>
                    <td>23657025</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sintija Trušinska</td>
                    <td>Gel nail extention with design</td>
                    <td>11-Nov-2014 17:00, Pirmdiena</td>
                    <td>Wushen Banovac</td>
                    <td>24151774</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Baiba Mīļumiņa</td>
                    <td>Manicure + gel nail polish</td>
                    <td>12-Oct-2014 14:00, Otrdiena</td>
                    <td>Won Barakat</td>
                    <td>28022128</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Linda Teša</td>
                    <td>French manicure</td>
                    <td>13-Nov-2014 14:00, Trešdiena</td>
                    <td>Won Barnes</td>
                    <td>29081481</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Jeļena Petrova</td>
                    <td>European manicure</td>
                    <td>08-Oct-2014 10:00, Ceturtdiena</td>
                    <td>William Barrett</td>
                    <td>27869889</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sabīne Ozola</td>
                    <td>Manicure + nail polish</td>
                    <td>09-Nov-2014 10:00, Piektdiena</td>
                    <td>Willem Baxter</td>
                    <td>29605895</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Raimonds Pabrieza</td>
                    <td>Gel nail extention</td>
                    <td>09-Oct-2014 10:00, Otrdiena</td>
                    <td>William Baxter</td>
                    <td>27025653</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Zane Dmitrijeva</td>
                    <td>Waxing</td>
                    <td>11-Nov-2014 19:00, Pirmdiena</td>
                    <td>Wei Beatty</td>
                    <td>23569983</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Kristīne Pūliņa</td>
                    <td>Lash extention</td>
                    <td>11-Oct-2014 18:00, Otrdiena</td>
                    <td>Wayne Bechrakis</td>
                    <td>24286444</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Baiba Antonovica</td>
                    <td>Gel nail extention with design</td>
                    <td>11-Nov-2014 17:00, Trešdiena</td>
                    <td>Vivek Beistegui</td>
                    <td>22576171</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Judite Vatere</td>
                    <td>Manicure + gel nail polish</td>
                    <td>12-Oct-2014 16:00, Ceturtdiena</td>
                    <td>Viacheslav Benchimol</td>
                    <td>24998330</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Zuzi Pavlíková</td>
                    <td>Manicure + nail polish</td>
                    <td>13-Nov-2014 15:00, Piektdiena</td>
                    <td>Valle Berkman</td>
                    <td>24053187</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sintija Pātare</td>
                    <td>Gel nail extention</td>
                    <td>08-Oct-2014 14:00, Otrdiena</td>
                    <td>Uros Birkhofer</td>
                    <td>28037479</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sintija Trušinska</td>
                    <td>Waxing</td>
                    <td>09-Dec-2014 11:00, Otrdiena</td>
                    <td>Trent Blakely</td>
                    <td>23805426</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Baiba Mīļumiņa</td>
                    <td>Lash extention</td>
                    <td>09-Oct-2014 11:00, Pirmdiena</td>
                    <td>Tobias Blattman</td>
                    <td>27744133</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Linda Teša</td>
                    <td>Gel nail extention with design</td>
                    <td>11-Dec-2014 11:00, Otrdiena</td>
                    <td>Timothy Bolton</td>
                    <td>29806140</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Jeļena Petrova</td>
                    <td>Manicure + gel nail polish</td>
                    <td>11-Oct-2014 11:00, Trešdiena</td>
                    <td>Tiffanie Bosson</td>
                    <td>29652755</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sabīne Ozola</td>
                    <td>French manicure</td>
                    <td>11-Dec-2014 11:00, Ceturtdiena</td>
                    <td>Thomas Brandt</td>
                    <td>29055094</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Raimonds Pabrieza</td>
                    <td>Manicure + nail polish</td>
                    <td>12-Dec-2014 15:00, Piektdiena</td>
                    <td>Thomas Braun</td>
                    <td>27225656</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Zane Dmitrijeva</td>
                    <td>Gel nail extention</td>
                    <td>13-Oct-2014 16:00, Otrdiena</td>
                    <td>Theodore Brodsky</td>
                    <td>25828189</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Kristīne Pūliņa</td>
                    <td>Waxing</td>
                    <td>12-Dec-2014 16:00, Otrdiena</td>
                    <td>Thavin Bromberg</td>
                    <td>26797730</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Baiba Antonovica</td>
                    <td>Manicure + nail polish</td>
                    <td>13-Dec-2014 16:00, Pirmdiena</td>
                    <td>Ted Brown</td>
                    <td>24261731</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Judite Vatere</td>
                    <td>Gel nail extention</td>
                    <td>12-Oct-2014 16:00, Otrdiena</td>
                    <td>Thanadtha Brown</td>
                    <td>28548374</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Zuzi Pavlíková</td>
                    <td>Waxing</td>
                    <td>13-Dec-2014 16:00, Trešdiena</td>
                    <td>Taylor Buckley</td>
                    <td>23560325</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sintija Pātare</td>
                    <td>Lash extention</td>
                    <td>12-Oct-2014 12:00, Ceturtdiena</td>
                    <td>Taryn Canal</td>
                    <td>28451139</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sintija Trušinska</td>
                    <td>Gel nail extention with design</td>
                    <td>13-Dec-2014 12:00, Piektdiena</td>
                    <td>Tara Cantrock</td>
                    <td>25918007</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Baiba Mīļumiņa</td>
                    <td>Manicure + gel nail polish</td>
                    <td>12-Oct-2014 12:00, Otrdiena</td>
                    <td>Tanzeer Cao</td>
                    <td>25729328</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Linda Teša</td>
                    <td>French manicure</td>
                    <td>13-Dec-2014 12:00, Otrdiena</td>
                    <td>Tae Carrillo</td>
                    <td>23142131</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Jeļena Petrova</td>
                    <td>European manicure</td>
                    <td>09-Oct-2014 12:00, Pirmdiena</td>
                    <td>Tadamitsu Carrow</td>
                    <td>23021893</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sabīne Ozola</td>
                    <td>Manicure + nail polish</td>
                    <td>11-Dec-2014 11:00, Otrdiena</td>
                    <td>Sung Casasayas</td>
                    <td>29282578</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Raimonds Pabrieza</td>
                    <td>Manicure + nail polish</td>
                    <td>11-Oct-2014 11:00, Trešdiena</td>
                    <td>Suanne Cautero</td>
                    <td>27460035</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Zane Dmitrijeva</td>
                    <td>Gel nail extention</td>
                    <td>11-Dec-2014 11:00, Ceturtdiena</td>
                    <td>Stuti Cha</td>
                    <td>25871856</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Kristīne Pūliņa</td>
                    <td>Waxing</td>
                    <td>07-Dec-2014 12:00, Piektdiena</td>
                    <td>Stephen Chan</td>
                    <td>23273967</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Baiba Antonovica</td>
                    <td>Lash extention</td>
                    <td>07-Oct-2014 13:00, Otrdiena</td>
                    <td>Steven Chan</td>
                    <td>28445086</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Judite Vatere</td>
                    <td>Gel nail extention with design</td>
                    <td>07-Dec-2014 14:00, Otrdiena</td>
                    <td>Sompop Chang</td>
                    <td>23866954</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Zuzi Pavlíková</td>
                    <td>Manicure + gel nail polish</td>
                    <td>07-Oct-2014 15:00, Pirmdiena</td>
                    <td>Spencer Chang</td>
                    <td>24402914</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sintija Pātare</td>
                    <td>French manicure</td>
                    <td>07-DecDec-2014 16:00, Otrdiena</td>
                    <td>Stephanie Chang</td>
                    <td>23321217</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>
                <tr>
                    <td>Sintija Trušinska</td>
                    <td>European manicure</td>
                    <td>07-Oct-2014 17:00, Trešdiena</td>
                    <td>Simond Chat</td>
                    <td>23691128</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </section>
@endsection
