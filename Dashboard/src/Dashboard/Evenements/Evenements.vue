<template>
    <div class="pagetitle">
        <h1>Evenements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accuiel</a></li>

                <li class="breadcrumb-item active">listes des Evenements</li>
            </ol>
        </nav>
    </div>

    <div class="card p-2">
        <h4><i class="fa-solid fa-calendar-plus"></i> Les evenements

            <RouterLink to="#" class="btn  float-end m-2">





                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal"
                    style="background-color: #00002E;color: #fff;"> Creer un evenement </button>
                <div class="modal fade" id="basicModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content  col-15">
                            <div class="modal-header">
                                <h5 class="modal-title">Ajouter d'un evenement </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="
                                " class="row
                                ">
                                    <div class="col-md-4"> <label for="validationDefault01" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="validationDefault01" placeholder="Ymele"
                                            required>
                                    </div>
                                    <div class="col-md-4"> <label for="validationDefault01" class="form-label">Theme</label>
                                        <input type="text" class="form-control" id="validationDefault01" placeholder="Ymele"
                                            required>
                                    </div>
                                    <div class="col-md-4"> <label for="validationDefault01" class="form-label">Date de
                                            debut</label>
                                        <input type="date" class="form-control" id="validationDefault01" placeholder="Ymele"
                                            required>
                                    </div>
                                    <div class="col-md-4"> <label for="validationDefault01"
                                            class="form-label">Description</label>
                                        <input type="text" class="form-control" id="validationDefault01" placeholder="Ymele"
                                            required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-danger"
                                    data-bs-dismiss="modal">Fermer</button> <button type="button"
                                    class="btn btn-primary">Publier</button></div>
                        </div>
                    </div>
                </div>

            </RouterLink>

        </h4>
        <table class="table table-borderless ">
            <thead>
                <tr style="background-color: #00002E;color: #fff;">
                    <th scope="col">#</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Theme</th>
                    <th scope="col">Date de debut</th>
                    <th scope="col">Details</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><a href="#" class="text-primary fw-bold">Hopital general de douala</a></td>
                    <td></td>
                    <td class="fw-bold">124</td>
                    <td></td>
                </tr>




            </tbody>
        </table>
    </div>
    <div class="card col-11">
        <div class="card-body">
            <h5 class="card-title">vos evenements</h5>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                            aria-expanded="false" aria-controls="flush-collapseOne"> Sensibilisation sur les risque d'anemie
                        </button></h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><strong>Details</strong> Il et important de note ici que l'anemie et
                            l'un des principale cause de deces par le sang <br>
                            <strong>image</strong> <br>
                            <strong>publier le</strong> 24/10/2023 <br>
                            <button class=" btn btn-danger m-1"><i class="fa-solid fa-trash"></i></button> <button
                                class=" btn btn-primary m-1"><i class="fa-solid fa-pencil"></i></button>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo"> <button class="accordion-button collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                            aria-expanded="false" aria-controls="flush-collapseTwo"> Accordion Item #2 </button></h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                            the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine
                            this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree"> <button class="accordion-button collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                            aria-expanded="false" aria-controls="flush-collapseThree"> Accordion Item #3 </button></h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                            the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more
                            exciting happening here in terms of content, but just filling up the space to make it look, at
                            least at first glance, a bit more representative of how this would look in a real-world
                            application.</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
</script>
<style></style>