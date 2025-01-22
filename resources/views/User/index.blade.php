@extends('User.UserLayout.main')
@section('title')
    Index
@endsection

@section('mainsection')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Laravel</strong> hello...</h1>
            <div class="row">
                <div class="col-12">
                    <div class="card flex-fill">
                        {{-- <div class="card-header">
                            <h5 class="card-title mb-0">Overview of Laravel</h5>
                        </div> --}}
                        <div class="card-body">
                            <p>
                                Laravel is a popular open-source PHP framework designed for building modern web applications. 
                                It follows the <strong>Model-View-Controller (MVC)</strong> architectural pattern, emphasizing simplicity, elegance, 
                                and scalability. Laravel offers tools and features to simplify tasks like routing, database interactions, 
                                and authentication, making it a go-to choice for developers.
                            </p>
                            <h4>Key Features of Laravel</h4>
                            <ol>
                                <li>
                                    <strong>MVC Architecture</strong>
                                    <p>Separates business logic from the presentation layer. Promotes code reusability and maintainability.</p>
                                </li>
                                <li>
                                    <strong>Routing</strong>
                                    <p>
                                        Laravel provides an elegant and simple way to define routes in the <code>routes/web.php</code> file.
                                        Supports route groups, middleware, and named routes.
                                    </p>
                                </li>
                                <li>
                                    <strong>Eloquent ORM</strong>
                                    <p>
                                        A robust, object-oriented database layer. Simplifies database operations using models, relationships, 
                                        and query builders.
                                    </p>
                                </li>
                                <li>
                                    <strong>Blade Templating</strong>
                                    <p>
                                        Lightweight and flexible templating engine. Supports layouts, sections, and dynamic content rendering.
                                    </p>
                                </li>
                                <li>
                                    <strong>Database Migration & Seeding</strong>
                                    <p>
                                        Version control for database schemas using migrations. Seeders allow for populating the database 
                                        with initial or test data.
                                    </p>
                                </li>
                                <li>
                                    <strong>Authentication & Authorization</strong>
                                    <p>
                                        Built-in authentication scaffolding. Simplified role-based and permission-based access control.
                                    </p>
                                </li>
                                <li>
                                    <strong>RESTful API Support</strong>
                                    <p>
                                        Built-in support for creating RESTful APIs with tools like:
                                        <ul>
                                            <li>API resources</li>
                                            <li>Sanctum for token-based authentication</li>
                                            <li>Passport for OAuth authentication</li>
                                        </ul>
                                    </p>
                                </li>
                                <li>
                                    <strong>Task Scheduling</strong>
                                    <p>
                                        Automate tasks using the Task Scheduler and the <code>cron</code> job system. Define tasks in 
                                        the <code>app/Console/Kernel.php</code> file.
                                    </p>
                                </li>
                                <li>
                                    <strong>Middleware</strong>
                                    <p>
                                        Add logic between requests and responses (e.g., authentication, logging). Easily customizable 
                                        for specific needs.
                                    </p>
                                </li>
                                <li>
                                    <strong>Queues & Jobs</strong>
                                    <p>
                                        Manages background tasks (e.g., sending emails or processing files). Supports drivers like Redis, 
                                        SQS, and database.
                                    </p>
                                </li>
                                <li>
                                    <strong>File Storage</strong>
                                    <p>
                                        Unified API for local and cloud-based storage (e.g., AWS S3, Google Cloud, and Dropbox). Convenient 
                                        methods for file upload, retrieval, and deletion.
                                    </p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </main>
@endsection

@section('Script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection


