$(document).ready(function () {
    let productCount = 0;

    // Fonction pour vérifier si le produit existe déjà
    function isProductAlreadyAdded(productName) {
        let isAdded = false;
        $('#cart-body tr').each(function () {
            const existingProduct = $(this).find('strong').text().trim();
            if (existingProduct === productName) {
                isAdded = true;
            }
        });
        return isAdded;
    }

    // Ajouter un produit au panier
    $('.add-to-cart').click(function () {
        const name = $(this).data('name');
        const price = $(this).data('price');
        const img = $(this).data('img');
        const button = $(this);

        // Vérifie si le produit est déjà ajouté
        if (isProductAlreadyAdded(name)) {
            // Désactive le bouton et change le texte
            button.prop('disabled', true).text('Déjà ajouté');
            return;
        }

        // Supprimer la ligne "vide" si elle existe
        $('#empty-row').remove();

        // Créer une nouvelle ligne pour le produit
        const newRow = `
            <tr>
                <td class="d-flex flex-column align-items-center">
                    <img style="width: 50px;" src="${img}" alt="${name}">
                    <strong>${name}</strong>
                    <input type="hidden" name="produits[][nom]" value="${name}">
                    <input type="hidden" name="produits[][image]" value="${img}">
                </td>
                <td>
                    <input type="number" name="produits[][quantite]" value="1" class="form-control form-control-sm w-75 mx-auto" min="1">
                </td>
                <td>
                    <input type="text" name="produits[][prix]" value="${price}" class="form-control form-control-sm w-100" readonly>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-danger remove-item">
                        <i class="fa-solid fa-trash text-white"></i>
                    </button>
                </td>
            </tr>

        `;

        // Ajouter le produit au tableau
        $('#cart-body').append(newRow);

        // Mettre à jour le compteur de produits
        productCount++;
        $('#cart-badge').text(productCount);

        // Si le panier est vide, afficher le message
        if (productCount > 0) {
            $('#empty-row').remove();
        }
    });

  // Supprimer un produit du panier
    $(document).on('click', '.remove-item', function () {
        const row = $(this).closest('tr');
        const productName = row.find('strong').text().trim(); // Nom du produit à récupérer

        // Supprimer la ligne du tableau
        row.remove();

        productCount--; // Décrémenter le compteur de produits
        $('#cart-badge').text(productCount); // Mettre à jour le badge

        // Réactiver le bouton du produit
        $('.add-to-cart').each(function () {
            const button = $(this);
            const buttonProductName = button.data('name');
            if (buttonProductName === productName) {
                button.prop('disabled', false).text('+ Ajouter à nouveau'); // Réactive le bouton et remet le texte
            }
        });

        // Si le panier est vide, réafficher le message
        if (productCount === 0) {
            $('#cart-body').append(`
                <tr id="empty-row">
                    <td colspan="4" class="text-center text-muted">
                        Aucun produit ajouté pour l’instant.
                    </td>
                </tr>
            `);
        }
    });
});
