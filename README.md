# Activity Planner

Activity Planner est une application basée sur [API Platform](https://api-platform.com) conçue pour vous aider à planifier et gérer vos activités. Elle vous permet de gérer vos activités, vos utilisateurs et vos messages de manière simple et efficace.

## Prérequis

Avant d'installer et de configurer Activity Planner, assurez-vous d'avoir les prérequis suivants :

- **Docker**: Assurez-vous d'avoir [Docker](https://docs.docker.com/get-docker/) installé sur votre système. Docker sera utilisé pour déployer l'application.

- **Docker Compose**: Vous aurez également besoin de [Docker Compose](https://docs.docker.com/compose/install/) pour gérer les conteneurs Docker.

- **Git**: Assurez-vous d'avoir [Git](https://git-scm.com/downloads) installé sur votre système pour cloner le référentiel de l'application.

### Installation sous MacOS

Suivez ces étapes pour installer Activity Planner sur votre système :

1. Clonez ce référentiel GitHub sur votre machine locale en utilisant la commande suivante :

  bash
  git clone https://github.com/CoHillDev/activity-planner.git

2. Accédez au répertoire du projet :

  bash
  cd activity-planner

3. Utilisez Docker Compose pour construire et lancer les conteneurs Docker de l'application :

  bash
  docker-compose up -d

4. Une fois les conteneurs démarrés, vous pouvez accéder à l'application en ouvrant votre navigateur web et en visitant l'URL suivante : http://localhost
-> Pour accéder l'interface utilisateur: http://localhost/app

#### Installation sur Ubuntu

Si vous préférez exécuter l'application Activity Planner directement sur Ubuntu plutôt que sous Windows en raison des problèmes de performances lors du lancement des conteneurs Docker, suivez ces étapes pour cloner le référentiel et effectuer les modifications d'autorisations nécessaires :

1. Ouvrez un terminal sur votre système Ubuntu.

2. Clonez ce référentiel GitHub en utilisant la commande suivante. Assurez-vous d'être dans le répertoire où vous souhaitez installer l'application :

  bash
  git clone https://github.com/CoHillDev/activity-planner.git

3. Accédez au répertoire du projet que vous venez de cloner :

  bash
  cd activity-planner

4. Pour garantir l'accès des conteneurs Docker aux fichiers dans le répertoire racine de l'application, vous devrez modifier les autorisations d'accès. Utilisez la commande chmod avec l'option -R pour accorder des permissions d'écriture, de lecture et d'exécution à tous les fichiers et répertoires :

  bash
  chmod -R 777 .

-> Assurez-vous d'être dans le répertoire racine du projet lorsque vous exécutez cette commande.
-> N'oubliez pas que modifier les autorisations avec chmod 777 est une solution temporaire pour faciliter l'accès des conteneurs aux fichiers. Il peut être nécessaire d'ajuster ces autorisations en fonction des besoins de sécurité de votre système.

5. Une fois les autorisations modifiées, vous pouvez utiliser Docker Compose pour construire et lancer les conteneurs Docker de l'application :

  bash
  docker-compose up -d

6. Une fois les conteneurs démarrés, vous pouvez accéder à l'application en ouvrant votre navigateur web et en visitant l'URL suivante : http://localhost
-> Pour accéder l'interface utilisateur: http://localhost/app

Remarque : Les étapes ci-dessus sont destinées à l'installation sur Ubuntu et supposent que Docker est correctement configuré sur votre système. Veillez à personnaliser les commandes et les chemins en fonction de votre configuration spécifique.

##### Configuration
Activity Planner utilise API Platform, ce qui signifie que vous pouvez personnaliser l'application en fonction de vos besoins. Vous pouvez configurer les modèles de données, les autorisations d'accès, l'API GraphQL, et bien plus encore. Consultez la documentation d'API Platform pour plus d'informations sur la configuration.

IMPORTANT : Il faudra remplir les champs questions/réponses des tables Qcms et Qcm answers via l'admin d'API Platform (https://localhost/admin) pour valider le formulaire Activity dans l'interface User. Cette fonctionnalité permet de personnaliser les questions liées à l'activité proposée.

###### Crédits
Cette application est basée sur API Platform et a été créée par Manooonlb, Sofia_B, CoHillDev.

--------------------------------

# API Platform

API Platform is a next-generation web framework designed to easily create API-first projects without compromising extensibility
and flexibility:

* Design your own data model as plain old PHP classes or [**import an existing ontology**](https://api-platform.com/docs/schema-generator).
* **Expose in minutes a hypermedia REST or a GraphQL API** with pagination, data validation, access control, relation embedding,
  filters and error handling...
* Benefit from Content Negotiation: [GraphQL](https://api-platform.com/docs/core/graphql/), [JSON-LD](https://json-ld.org), [Hydra](https://hydra-cg.com),
  [HAL](https://github.com/mikekelly/hal_specification/blob/master/hal_specification.md), [JSON:API](https://jsonapi.org/), [YAML](https://yaml.org/), [JSON](https://www.json.org/), [XML](https://www.w3.org/XML/) and [CSV](https://www.ietf.org/rfc/rfc4180.txt) are supported out of the box.
* Enjoy the **beautiful automatically generated API documentation** ([OpenAPI](https://api-platform.com/docs/core/openapi/)).
* Add [**a convenient Material Design administration interface**](https://api-platform.com/docs/admin) built with [React](https://reactjs.org/)
  without writing a line of code.
* **Scaffold fully functional Progressive-Web-Apps and mobile apps** built with [Next.js](https://api-platform.com/docs/client-generator/nextjs/) (React),
[Nuxt.js](https://api-platform.com/docs/client-generator/nuxtjs/) (Vue.js) or [React Native](https://api-platform.com/docs/client-generator/react-native/)
thanks to [the client generator](https://api-platform.com/docs/client-generator/) (a Vue.js generator is also available).
* Install a development environment and deploy your project in production using **[Docker](https://api-platform.com/docs/distribution)**
and [Kubernetes](https://api-platform.com/docs/deployment/kubernetes).
* Easily add **[OAuth](https://oauth.net/) authentication**.
* Create specs and tests with **[a developer friendly API testing tool](https://api-platform.com/docs/distribution/testing/)**.

[![GitHub Actions](https://github.com/api-platform/core/workflows/CI/badge.svg)](https://github.com/api-platform/core/actions?workflow=CI)
[![Codecov](https://codecov.io/gh/api-platform/core/branch/master/graph/badge.svg)](https://codecov.io/gh/api-platform/core/branch/master)

The official project documentation is available **[on the API Platform website](https://api-platform.com)**.

API Platform embraces open web standards and the
[Linked Data](https://www.w3.org/standards/semanticweb/data) movement. Your API will automatically expose structured data.
It means that your API Platform application is usable **out of the box** with technologies of
the semantic web.

It also means that **your SEO will be improved** because **[Google leverages these formats](https://developers.google.com/search/docs/guides/intro-structured-data)**.

Last but not least, the server component of API Platform is built on top of the [Symfony](https://symfony.com) framework,
while client components leverage [React](https://reactjs.org/) ([Vue.js](https://vuejs.org/) flavors are also available).
It means that you can:

* Use **thousands of Symfony bundles and React components** with API Platform.
* Integrate API Platform in **any existing Symfony, React or Vue application**.
* Reuse **all your Symfony and JavaScript skills**, benefit of the incredible amount of documentation available.
* Enjoy the popular [Doctrine ORM](https://www.doctrine-project.org/projects/orm.html) (used by default, but fully optional:
  you can use the data provider you want, including but not limited to MongoDB and Elasticsearch)

## Install

[Read the official "Getting Started" guide](https://api-platform.com/docs/distribution).

### Credits

Created by [Kévin Dunglas](https://dunglas.fr). Commercial support available at [Les-Tilleuls.coop](https://les-tilleuls.coop).
