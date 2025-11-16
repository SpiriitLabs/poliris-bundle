#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

const char* cities[] = {"Paris", "Lyon", "Marseille", "Toulouse", "Nice", "Nantes", "Bordeaux", "Lille", "Strasbourg", "Rennes"};
const int cities_count = 10;

typedef struct {
    const char* type;
    const char* sousType;
} PropertyType;

PropertyType property_types[] = {
    {"Maison", "Villa"},
    {"Appartement", "T2"},
    {"Appartement", "T3"},
    {"Appartement", "T4"},
    {"Terrain", "Constructible"},
    {"Maison", "Pavillon"}
};
const int property_types_count = 6;

const char* transaction_types[] = {"vente", "location"};

void print_property(int i) {
    int city_idx = rand() % cities_count;
    int type_idx = rand() % property_types_count;
    int transaction_idx = rand() % 2;
    int is_rental = (transaction_idx == 1);
    
    PropertyType prop_type = property_types[type_idx];
    const char* city = cities[city_idx];
    const char* transaction_type = transaction_types[transaction_idx];
    
    int prix = is_rental ? (800 + (i % 1200)) : (150000 + (i % 500000));
    int surface_habitable = 50 + (i % 200);
    int surface_terrain = (strcmp(prop_type.type, "Terrain") == 0) ? (300 + (i % 1000)) : 0;
    
    printf("    {\n");
    printf("        \"identifiant\": {\n");
    printf("            \"agenceId\": \"AGENCY%03d\",\n", ((i % 100) + 1));
    printf("            \"agencePropertyRef\": \"REF-%s-%06d\",\n", prop_type.type, i);
    printf("            \"annonceType\": \"%s\",\n", transaction_type);
    printf("            \"annonceIdTechnique\": \"TECH-ID-%06d\"\n", i);
    printf("        },\n");
    
    printf("        \"type\": {\n");
    printf("            \"type\": \"%s\",\n", prop_type.type);
    printf("            \"sousType\": \"%s\"\n", prop_type.sousType);
    printf("        },\n");
    
    printf("        \"localisation\": {\n");
    printf("            \"ville\": \"%s\",\n", city);
    printf("            \"codePostal\": \"%d\",\n", 75000 + (i % 20));
    printf("            \"pays\": \"France\",\n");
    printf("            \"adresse\": \"%d Rue de la République\",\n", i % 100);
    printf("            \"latitude\": %.4f,\n", 48.8566 + ((i % 100) * 0.01));
    printf("            \"longitude\": %.4f,\n", 2.3522 + ((i % 100) * 0.01));
    printf("            \"proximite\": \"Proche commodités\"\n");
    printf("        },\n");
    
    printf("        \"prix\": {\n");
    printf("            \"prix\": %d,\n", prix);
    printf("            \"mentionPrix\": \"%s\"\n", is_rental ? "CC" : "FAI");
    printf("        },\n");
    
    printf("        \"surface\": {\n");
    printf("            \"habitable\": %d", surface_habitable);
    if (surface_terrain > 0) {
        printf(",\n            \"terrain\": %d\n", surface_terrain);
    } else {
        printf(",\n            \"terrain\": null\n");
    }
    printf("        },\n");
    
    printf("        \"contact\": {\n");
    printf("            \"nom\": \"Agent %d\",\n", (i % 50) + 1);
    printf("            \"telephone\": \"01%08d\",\n", i % 100000000);
    printf("            \"email\": \"agent%d@agency.com\",\n", (i % 50) + 1);
    printf("            \"siteWeb\": \"www.agency%d.com\"\n", (i % 10) + 1);
    printf("        },\n");
    
    printf("        \"detail\": {\n");
    printf("            \"activitesCommerciales\": \"%s %s\",\n", prop_type.sousType, is_rental ? "à louer" : "à vendre");
    printf("            \"description\": \"Description détaillée du bien immobilier numéro %d. Bien situé dans un quartier calme avec toutes commodités à proximité.\"\n", i);
    printf("        },\n");
    
    printf("        \"photos\": [\n");
    printf("            \"https://example.com/photos/property%d-1.jpg\",\n", i);
    printf("            \"https://example.com/photos/property%d-2.jpg\"\n", i);
    printf("        ],\n");
    
    printf("        \"photosTitres\": [\n");
    printf("            \"Vue principale\",\n");
    printf("            \"Vue intérieure\"\n");
    printf("        ]");
    
    if (is_rental) {
        printf(",\n        \"location\": {\n");
        printf("            \"loyerMensuel\": %d,\n", prix);
        printf("            \"charges\": %d\n", 50 + (i % 150));
        printf("        }");
    }
    
    if (strcmp(prop_type.type, "Terrain") == 0) {
        printf(",\n        \"terrain\": {\n");
        printf("            \"surface\": %d,\n", surface_terrain);
        printf("            \"constructible\": true,\n");
        printf("            \"viabilise\": %s,\n", (i % 2) == 0 ? "true" : "false");
        printf("            \"cos\": %.2f\n", 0.3 + ((i % 10) * 0.05));
        printf("        }");
    }
    
    printf("\n    }");
}

int main(int argc, char *argv[]) {
    int count = 1000;
    
    if (argc > 1) {
        count = atoi(argv[1]);
        if (count < 1 || count > 100000) {
            fprintf(stderr, "Error: Count must be between 1 and 100000\n");
            return 1;
        }
    }
    
    srand(time(NULL));
    
    printf("[\n");
    for (int i = 1; i <= count; i++) {
        print_property(i);
        if (i < count) {
            printf(",\n");
        }
    }
    printf("\n]\n");
    
    return 0;
}
